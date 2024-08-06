<?php

namespace SellingPartnerApi\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Generators\RequestGenerator as SDKGenerator;
use Crescat\SaloonSdkGenerator\Helpers\MethodGeneratorHelper;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
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

class RequestGenerator extends SDKGenerator
{
    protected function generateRequestClass(Endpoint $endpoint): PhpFile
    {
        $methods = [];

        $middleware = json_decode(file_get_contents(METADATA_DIR.'/middleware.json'));
        $grantlessOperations = json_decode(file_get_contents(METADATA_DIR.'/scopes.json'));
        $restrictedOperations = json_decode(file_get_contents(METADATA_DIR.'/restricted.json'));

        $className = NameHelper::requestClassName($endpoint->name);
        [$classFile, $namespace, $classType] = $this->makeClass($className, $this->config->namespaceSuffixes['request']);

        $baseRequestClass = $this->baseClassFqn();
        $classType->setExtends($baseRequestClass)
            ->setComment($endpoint->name);

        if ($endpoint->bodySchema?->bodyContentType === 'application/json' && ($endpoint->method->isPut() || $endpoint->method->isPost() || $endpoint->method->isPatch())) {
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
        $methods['__construct'] = $constructor;

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
            unset($methods['__construct']);
        }

        $methods['resolveEndpoint'] = $classType->addMethod('resolveEndpoint')
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

        $responseNamespace = $this->config->responseNamespace();

        $codesByResponseType = collect($endpoint->responses)
            // TODO: We assume JSON is the only response content type for each HTTP status code.
            // We should support multiple response types in the future
            ->mapWithKeys(function (array $response, int $httpCode) use ($namespace, $responseNamespace) {
                if (count($response) === 0) {
                    $isArrayResponse = false;
                    $cls = "{$this->config->baseFilesNamespace()}\\EmptyResponse";
                } else {
                    $responseSchema = $response[array_key_first($response)];
                    $isArrayResponse = $responseSchema->type === 'array';

                    if ($isArrayResponse) {
                        $name = $responseSchema->items->name;
                        // Array responses don't have their own response class, and the array item type will be a DTO,
                        // not a response type
                        $className = NameHelper::dtoClassName($name);
                        $ns = $this->config->dtoNamespace();
                    } else {
                        $name = $responseSchema->name;
                        $className = NameHelper::responseClassName($name);
                        $ns = $responseNamespace;
                    }

                    $cls = "{$ns}\\{$className}";
                }
                $namespace->addUse($cls);
                $alias = array_flip($namespace->getUses())[$cls];
                $responseType = $isArrayResponse ? "{$alias}[]" : $alias;

                return [$httpCode => $responseType];
            })
            ->reduce(function (Collection $carry, string $className, int $httpCode) {
                $carry->put(
                    $className,
                    [...$carry->get($className, []), $httpCode]
                );

                return $carry;
            }, collect());

        $namespace
            ->addUse($baseRequestClass)
            ->addUse(Exception::class)
            ->addUse(Response::class);
        $aliasMap = $namespace->getUses();

        $returnType = $codesByResponseType->map(
            fn (array $codes, string $className) => str_ends_with($className, '[]') ? 'array' : $aliasMap[$className]
        )->unique()
            ->implode('|');

        $returnTypeHint = $codesByResponseType->map(
            function (array $_, string $className) {
                $isArrayType = str_ends_with($className, '[]');
                $aliasKey = $isArrayType ? substr($className, 0, -2) : $className;
                //                $shortName = Helpers::extractShortName($aliasMap[$aliasKey]);
                $shortName = Helpers::extractShortName($aliasKey);

                return $isArrayType ? "{$shortName}[]" : $shortName;
            }
        )->implode('|');

        $createDtoMethod = $classType->addMethod('createDtoFromResponse')
            ->setPublic()
            ->setReturnType($returnType)
            ->addComment("@return $returnTypeHint")
            ->addBody('$status = $response->status();')
            ->addBody('$responseCls = match ($status) {')
            ->addBody(
                $codesByResponseType
                    ->map(function (array $codes, string $className) {
                        $isArrayResponse = str_ends_with($className, '[]');
                        $_className = $isArrayResponse ? substr($className, 0, -2) : $className;
                        $clsFormatStr = $isArrayResponse ? '[%s::class]' : '%s::class';

                        return sprintf("    %s => $clsFormatStr,", implode(', ', $codes), Helpers::extractShortName($_className));
                    })
                    ->values()
                    ->implode("\n")
            )
            ->addBody('    default => throw new Exception("Unhandled response status: {$status}")')
            ->addBody('};');

        $standardDeserializer = '   return $responseCls::deserialize($response->json());';
        if (str_contains($returnType, 'array')) {
            $createDtoMethod
                ->addBody("\nif (is_array(\$responseCls)) {")
                ->addBody('    return array_map(fn ($el) => $responseCls[0]::deserialize($el), $response->json());')
                ->addBody('} else {')
                ->addBody($standardDeserializer)
                ->addBody('}');
        } else {
            $createDtoMethod->addBody($standardDeserializer);
        }

        $createDtoMethod
            ->addParameter('response')
            ->setType(Response::class);
        $methods['createDtoFromResponse'] = $createDtoMethod;

        if ($endpoint->bodySchema) {
            $returnValText = $this->generateDefaultBody($endpoint->bodySchema);

            $methods['defaultBody'] = $classType
                ->addMethod('defaultBody')
                ->setReturnType('array')
                ->addBody(
                    sprintf("return {$returnValText};", NameHelper::safeVariableName($endpoint->bodySchema->name))
                );

            $bodyFQN = $this->bodyFQN($endpoint->bodySchema);
            $namespace->addUse($bodyFQN);
        }

        if ($endpoint->queryParameters) {
            $methods['defaultQuery'] = MethodGeneratorHelper::generateArrayReturnMethod(
                $classType,
                'defaultQuery',
                $this->queryParams,
                $this->config->datetimeFormat,
                withArrayFilterWrapper: true
            );
        }

        if ($endpoint->headerParameters) {
            $methods['defaultHeaders'] = MethodGeneratorHelper::generateArrayReturnMethod(
                $classType,
                'defaultHeaders',
                $this->headerParams,
                $this->config->datetimeFormat,
                withArrayFilterWrapper: true
            );
        }

        // By explicitly setting the list of methods here, we control the order they are rendered in the class.
        // Without this, they would be rendered in whatever order they were created.
        $classType->setMethods($methods);

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
