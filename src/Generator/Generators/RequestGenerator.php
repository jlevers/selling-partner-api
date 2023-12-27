<?php

namespace SellingPartnerApi\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Generators\RequestGenerator as BaseGenerator;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
use Crescat\SaloonSdkGenerator\Helpers\Utils;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Nette\PhpGenerator\ClassType;
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
        $classType = new ClassType($className);

        $classFile = new PhpFile;
        $requestNamespaceSuffix = NameHelper::optionalNamespaceSuffix($this->config->requestNamespaceSuffix);
        $namespace = $classFile
            ->addNamespace("{$this->config->namespace}{$requestNamespaceSuffix}");

        $classType->setExtends(Request::class)
            ->setComment($endpoint->name)
            ->addComment('')
            ->addComment(Utils::wrapLongLines($endpoint->description ?? ''));

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

        $classType->addMethod('resolveEndpoint')
            ->setPublic()
            ->setReturnType('string')
            ->addBody(
                collect($endpoint->pathSegments)
                    ->map(function ($segment) {
                        return Str::startsWith($segment, ':')
                            ? new Literal(sprintf('{$this->%s}', NameHelper::safeVariableName($segment)))
                            : $segment;
                    })
                    ->pipe(function (Collection $segments) {
                        return new Literal(sprintf('return "/%s";', $segments->implode('/')));
                    })

            );

        $responseSuffix = NameHelper::optionalNamespaceSuffix($this->config->responseNamespaceSuffix);
        $responseNamespace = "{$this->config->namespace}{$responseSuffix}";

        $codesByResponseType = collect($endpoint->responses)
            // TODO: We assume JSON is the only response content type for each HTTP status code.
            // We should support multiple response types in the future
            ->mapWithKeys(fn (array $response, int $httpCode) => [
                $httpCode => NameHelper::responseClassName($response[array_key_first($response)]->name),
            ])
            ->reduce(function (Collection $carry, string $className, int $httpCode) {
                $carry->put(
                    $className,
                    [...$carry->get($className, []), $httpCode]
                );

                return $carry;
            }, collect());

        $fqnResponseTypes = $codesByResponseType
            ->keys()
            ->map(fn (string $className) => "{$responseNamespace}\\{$className}");

        foreach ($fqnResponseTypes as $className) {
            $namespace->addUse($className);
        }
        $namespace
            ->addUse(Exception::class)
            ->addUse(Response::class);

        $createDtoMethod = $classType->addMethod('createDtoFromResponse')
            ->setPublic()
            ->setReturnType($fqnResponseTypes->implode('|'))
            ->addBody('$status = $response->status();')
            ->addBody('$responseCls = match ($status) {')
            ->addBody(
                $codesByResponseType
                    ->map(fn (array $codes, string $className) => sprintf(
                        '    %s => %s::class,',
                        implode(', ', $codes), $className
                    ))
                    ->values()
                    ->implode("\n")
            )
            ->addBody('    default => throw new Exception("Unhandled response status: {$status}")')
            ->addBody('};')
            ->addBody('return $responseCls::deserialize($response->json());');
        $createDtoMethod
            ->addParameter('response')
            ->setType(Response::class);

        $this->generateConstructor($endpoint, $classType);

        $namespace
            ->addUse(SaloonHttpMethod::class)
            ->addUse(Request::class)
            ->add($classType);

        return $classFile;
    }
}
