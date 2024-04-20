<?php

namespace SellingPartnerApi\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\EmptyResponse;
use Crescat\SaloonSdkGenerator\Enums\SimpleType;
use Crescat\SaloonSdkGenerator\Generators\RequestGenerator as BaseGenerator;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
use Crescat\SaloonSdkGenerator\Helpers\Utils;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Nette\PhpGenerator\Helpers;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpFile;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method as SaloonHttpMethod;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Enums\GrantlessScope;
use SellingPartnerApi\Middleware\Grantless;
use SellingPartnerApi\Middleware\RestrictedDataToken;

class RequestGenerator extends BaseGenerator
{
    protected function generateRequestClass(Endpoint $endpoint): PhpFile
    {
        $middleware = json_decode(file_get_contents(METADATA_DIR.'/middleware.json'));
        $grantlessOperations = json_decode(file_get_contents(METADATA_DIR.'/scopes.json'));
        $restrictedOperations = json_decode(file_get_contents(METADATA_DIR.'/restricted.json'));

        $className = NameHelper::requestClassName($endpoint->name);
        [$classFile, $namespace, $classType] = $this->makeClass($className, $this->config->requestNamespaceSuffix);

        $classType->setExtends(Request::class)
            ->setComment($endpoint->name);

        // TODO: We assume JSON body if post/patch, make these assumptions configurable in the future.
        if ($endpoint->method->isPost() || $endpoint->method->isPatch()) {
            $classType
                ->addImplement(HasBody::class)
                ->addTrait(HasJsonBody::class);

            $namespace
                ->addUse(HasBody::class)
                ->addUse(HasJsonBody::class);
        }

        $classType->addProperty('method')
            ->setProtected()
            ->setType(SaloonHttpMethod::class)
            ->setValue(
                new Literal(
                    sprintf('Method::%s', $endpoint->method->value)
                )
            );

        $constructor = $this->generateConstructor($endpoint, $classType);

        $path = $this->buildGenericPath($endpoint->pathSegments);
        $httpMethod = strtolower($endpoint->method->value);

        $isRestricted = isset($restrictedOperations->{$path}->operations->{$httpMethod});
        $isGrantless = isset($grantlessOperations->{$path}->{$httpMethod});

        $requestMiddleware = $middleware->{$path}->{$httpMethod}->request ?? [];
        if ($requestMiddleware) {
            // If there is request middleware besides the RDT or Grantless middlewares applied to a request
            // that also is grantless or uses an RDT, the other middleware needs to invoke the RDT and/or
            // Grantless middleware, otherwise it will not be applied
            foreach ($requestMiddleware as $cls) {
                $namespace->addUse(PACKAGE_NAMESPACE."\\Middleware\\$cls");
                $constructor->addBody(new Literal(sprintf('$this->middleware()->onRequest(new %s);', $cls)));
            }
        } elseif ($isRestricted) {
            $namespace->addUse(RestrictedDataToken::class);
            $useGenericPath = $restrictedOperations->{$path}->genericPath;
            $knownDataElements = $restrictedOperations->{$path}->operations->{$httpMethod};
            $constructor->addBody(
                new Literal(sprintf(
                    '$rdtMiddleware = new RestrictedDataToken(%s, \'%s\', %s);',
                    $useGenericPath ? "'$path'" : '$this->resolveEndpoint()',
                    strtoupper($httpMethod),
                    '['.implode(', ', array_map(fn ($el) => "'$el'", $knownDataElements)).']'
                ))
            );
            $constructor->addBody('$this->middleware()->onRequest($rdtMiddleware);');
        } elseif ($isGrantless) {
            $namespace
                ->addUse(Grantless::class)
                ->addUse(GrantlessScope::class);
            $scope = GrantlessScope::from($grantlessOperations->{$path}->{$httpMethod});

            $constructor->addBody(
                new Literal(sprintf(
                    '$this->middleware()->onRequest(new Grantless(GrantlessScope::%s));',
                    $scope->name
                ))
            );
        }

        // Remove the constructor if it's not being used
        if (count($constructor->getParameters()) === 0 && $constructor->getBody() === '') {
            $classType->removeMethod('__construct');
        }

        $classType->addMethod('resolveEndpoint')
            ->setPublic()
            ->setReturnType('string')
            ->addBody(
                collect($endpoint->pathSegments)
                    ->map(fn ($segment) => Str::startsWith($segment, ':')
                        ? new Literal(sprintf('{$this->%s}', NameHelper::safeVariableName($segment)))
                        : $segment
                    )
                    ->pipe(fn (Collection $segments) => new Literal(sprintf('return "/%s";', $segments->implode('/'))))
            );

        $responseSuffix = NameHelper::optionalNamespaceSuffix($this->config->responseNamespaceSuffix);
        $responseNamespace = "{$this->config->namespace}{$responseSuffix}";

        $codesByResponseType = collect($endpoint->responses)
            // TODO: We assume JSON is the only response content type for each HTTP status code.
            // We should support multiple response types in the future
            ->mapWithKeys(function (array $response, int $httpCode) use ($namespace, $responseNamespace) {
                if (count($response) === 0) {
                    $cls = EmptyResponse::class;
                } else {
                    $className = NameHelper::responseClassName($response[array_key_first($response)]->name);
                    $cls = "{$responseNamespace}\\{$className}";
                }
                $namespace->addUse($cls);
                $alias = array_flip($namespace->getUses())[$cls];

                return [$httpCode => $alias];
            })
            ->reduce(function (Collection $carry, string $className, int $httpCode) {
                $carry->put(
                    $className,
                    [...$carry->get($className, []), $httpCode]
                );

                return $carry;
            }, collect());

        $namespace
            ->addUse(Exception::class)
            ->addUse(Response::class);

        $aliasMap = $namespace->getUses();
        $returnType = $codesByResponseType->map(fn (array $codes, string $className) => $aliasMap[$className])->implode('|');
        $createDtoMethod = $classType->addMethod('createDtoFromResponse')
            ->setPublic()
            ->setReturnType($returnType)
            ->addBody('$status = $response->status();')
            ->addBody('$responseCls = match ($status) {')
            ->addBody(
                $codesByResponseType
                    ->map(fn (array $codes, string $className) => sprintf(
                        '    %s => %s::class,',
                        implode(', ', $codes), Helpers::extractShortName($className)
                    ))
                    ->values()
                    ->implode("\n")
            )
            ->addBody('    default => throw new Exception("Unhandled response status: {$status}")')
            ->addBody('};')
            ->addBody('return $responseCls::deserialize($response->json(), $responseCls);');
        $createDtoMethod
            ->addParameter('response')
            ->setType(Response::class);

        if ($endpoint->bodySchema) {
            $bodyType = $endpoint->bodySchema->type;
            if (SimpleType::isScalar($bodyType)) {
                $returnValText = '[$this->%s]';
            } elseif ($bodyType === 'DateTime') {
                $returnValText = '$this->%s->format(\DateTime::RFC3339)';
            } elseif (! Utils::isBuiltinType($bodyType)) {
                $returnValText = '$this->%s->toArray()';
            } else {
                $returnValText = '$this->%s';
            }
            $classType
                ->addMethod('defaultBody')
                ->setReturnType('array')
                ->addBody(
                    sprintf("return {$returnValText};", NameHelper::safeVariableName($endpoint->bodySchema->name))
                );

            $bodyFQN = $this->bodyFQN($endpoint->bodySchema);
            $namespace->addUse($bodyFQN);
        }

        $namespace
            ->addUse(SaloonHttpMethod::class)
            ->addUse(Request::class)
            ->add($classType);

        return $classFile;
    }

    /**
     * @param  array<string>  $segments
     */
    private function buildGenericPath(array $segments): string
    {
        $path = '/'.implode('/', $segments);
        $withBraces = preg_replace('/\:([a-zA-Z0-9_]+)(\/|$)/', '{$1}$2', $path);

        return $withBraces;
    }
}
