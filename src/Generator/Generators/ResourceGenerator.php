<?php

namespace SellingPartnerApi\Generator\Generators;

use Crescat\SaloonSdkGenerator\Generators\ResourceGenerator as BaseResourceGenerator;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
use Nette\InvalidStateException;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpFile;
use Saloon\Http\Response;

class ResourceGenerator extends BaseResourceGenerator
{
    /**
     * @param  array|Endpoint[]  $endpoints
     */
    public function generateResourceClass(string $resourceName, array $endpoints): ?PhpFile
    {
        $classType = new ClassType('Api');

        $baseResourceNs = $this->config->baseResourceNamespace ?? $this->config->namespace;
        $classType->setExtends("{$baseResourceNs}\\BaseResource");

        $classFile = new PhpFile;
        $resourceNamespaceSuffix = NameHelper::optionalNamespaceSuffix($this->config->resourceNamespaceSuffix);
        $namespace = $classFile
            ->addNamespace("{$this->config->namespace}{$resourceNamespaceSuffix}")
            ->addUse("{$baseResourceNs}\\BaseResource");

        $duplicateCounter = 1;

        foreach ($endpoints as $endpoint) {
            $requestClassName = NameHelper::resourceClassName($endpoint->name);
            $methodName = NameHelper::safeVariableName($requestClassName);
            $requestClassNameAlias = $requestClassName == $resourceName ? "{$requestClassName}Request" : null;
            $requestNamespaceSuffix = NameHelper::optionalNamespaceSuffix($this->config->requestNamespaceSuffix);
            $requestClassFQN = "{$this->config->namespace}{$requestNamespaceSuffix}\\{$requestClassName}";

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
                $this->addPropertyToMethod($method, $parameter);
                $args[] = new Literal(sprintf('$%s', NameHelper::safeVariableName($parameter->name)));
            }

            foreach ($endpoint->bodyParameters as $parameter) {
                if (in_array($parameter->name, $this->config->ignoredBodyParams)) {
                    continue;
                }

                $this->addPropertyToMethod($method, $parameter);
                $args[] = new Literal(sprintf('$%s', NameHelper::safeVariableName($parameter->name)));
            }

            foreach ($endpoint->queryParameters as $parameter) {
                if (in_array($parameter->name, $this->config->ignoredQueryParams)) {
                    continue;
                }
                $this->addPropertyToMethod($method, $parameter);
                $args[] = new Literal(sprintf('$%s', NameHelper::safeVariableName($parameter->name)));
            }

            $method->setBody(
                new Literal(sprintf('return $this->connector->send(new %s(%s));', $requestClassNameAlias ?? $requestClassName, implode(', ', $args)))
            );

        }

        $namespace->add($classType);

        return $classFile;
    }
}
