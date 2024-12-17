<?php

namespace SellingPartnerApi\Generator\Generators;

use Crescat\SaloonSdkGenerator\Enums\SimpleType;
use Crescat\SaloonSdkGenerator\Generators\ResourceGenerator as SDKGenerator;
use Crescat\SaloonSdkGenerator\Helpers\MethodGeneratorHelper;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
use Nette\InvalidStateException;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpFile;
use Saloon\Http\Response;

class ResourceGenerator extends SDKGenerator
{
    /**
     * @param  array|Endpoint[]  $endpoints
     */
    public function generateResourceClass(string $resourceName, array $endpoints): ?PhpFile
    {
        $baseResourceFqn = $this->baseClassFqn();

        $classType = new ClassType('Api');
        $classFile = new PhpFile;
        $namespace = $classFile
            ->addNamespace($this->config->resourceNamespace())
            ->addUse($baseResourceFqn);

        $classType->setExtends($baseResourceFqn);

        $duplicateCounter = 1;

        foreach ($endpoints as $endpoint) {
            $requestClassName = NameHelper::resourceClassName($endpoint->name);
            $methodName = NameHelper::safeVariableName($requestClassName);
            $requestClassNameAlias = $requestClassName == $resourceName ? "{$requestClassName}Request" : null;
            $requestClassFQN = "{$this->config->requestNamespace()}\\{$requestClassName}";

            $namespace
                ->addUse(Response::class)
                ->addUse(
                    name: $requestClassFQN,
                    alias: $requestClassNameAlias,
                );

            try {
                $method = $classType->addMethod($methodName);
            } catch (InvalidStateException $exception) {
                // TODO: handle more gracefully in the future
                $deduplicatedMethodName = NameHelper::safeVariableName(
                    sprintf('%s%s', $methodName, 'Duplicate'.$duplicateCounter)
                );
                $duplicateCounter++;
                dump("DUPLICATE: {$requestClassName} -> {$deduplicatedMethodName}");

                $method = $classType
                    ->addMethod($deduplicatedMethodName)
                    ->addComment('@todo Fix duplicated method name');
            }

            $method->setReturnType(Response::class);

            $args = [];

            foreach ($endpoint->pathParameters as $parameter) {
                MethodGeneratorHelper::addParameterToMethod($method, $parameter);
                $args[] = new Literal(sprintf('$%s', NameHelper::safeVariableName($parameter->name)));
            }

            if ($endpoint->bodySchema) {
                $dtoNamespace = $this->config->dtoNamespace();

                // Don't need to import the DTO if the body is an array
                if (SimpleType::tryFrom($endpoint->bodySchema->type) !== SimpleType::ARRAY) {
                    $safeSchemaName = NameHelper::requestClassName($endpoint->bodySchema->name);
                    $bodyFQN = "{$dtoNamespace}\\{$safeSchemaName}";
                    $namespace->addUse($bodyFQN);
                }

                MethodGeneratorHelper::addParameterToMethod($method, $endpoint->bodySchema, namespace: $dtoNamespace);
                $args[] = new Literal(sprintf('$%s', NameHelper::safeVariableName($endpoint->bodySchema->name)));
            }

            foreach ($endpoint->queryParameters as $parameter) {
                if (in_array($parameter->name, $this->config->ignoredParams['query'])) {
                    continue;
                }
                MethodGeneratorHelper::addParameterToMethod($method, $parameter);
                $args[] = new Literal(sprintf('$%s', NameHelper::safeVariableName($parameter->name)));
            }

            foreach ($endpoint->headerParameters as $parameter) {
                if (in_array($parameter->rawName, $this->config->ignoredParams['header'])) {
                    continue;
                }
                MethodGeneratorHelper::addParameterToMethod($method, $parameter);
                $args[] = new Literal(sprintf('$%s', NameHelper::safeVariableName($parameter->name)));
            }

            $method->addBody(
                new Literal(sprintf(
                    '$request = new %s(%s);',
                    $requestClassNameAlias ?? $requestClassName,
                    implode(', ', $args)
                ))
            );

            $method->addBody('return $this->connector->send($request);');
        }

        $namespace->add($classType);

        return $classFile;
    }
}
