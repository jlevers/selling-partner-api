<?php

namespace SellingPartnerApi\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\EmptyResponse;
use Crescat\SaloonSdkGenerator\Generators\RequestGenerator as BaseGenerator;
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

class RequestGenerator extends BaseGenerator
{
    protected function generateRequestClass(Endpoint $endpoint): PhpFile
    {
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

        $this->generateConstructor($endpoint, $classType);

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

                return [$httpCode => $cls];
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

        $createDtoMethod = $classType->addMethod('createDtoFromResponse')
            ->setPublic()
            ->setReturnType($codesByResponseType->keys()->implode('|'))
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

        $namespace
            ->addUse(SaloonHttpMethod::class)
            ->addUse(Request::class)
            ->add($classType);

        return $classFile;
    }
}
