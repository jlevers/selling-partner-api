<?php

namespace SellingPartnerApi\Generator\Generators;

use Crescat\SaloonSdkGenerator\Enums\SimpleType;
use Crescat\SaloonSdkGenerator\Generators\ResourceGenerator as BaseResourceGenerator;
use Crescat\SaloonSdkGenerator\Helpers\MethodGeneratorHelper;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
use Nette\InvalidStateException;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpFile;
use Saloon\Http\Response;
use SellingPartnerApi\Authentication\GrantlessAuthenticator;
use SellingPartnerApi\Authentication\RestrictedDataTokenAuthenticator;
use SellingPartnerApi\Enums\GrantlessScope;

class ResourceGenerator extends BaseResourceGenerator
{
    /**
     * @param  array|Endpoint[]  $endpoints
     */
    public function generateResourceClass(string $resourceName, array $endpoints): ?PhpFile
    {
        $grantlessScopes = json_decode(file_get_contents(METADATA_DIR.'/scopes.json'));
        $restrictedOperations = json_decode(file_get_contents(METADATA_DIR.'/restricted.json'));

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
                MethodGeneratorHelper::addParameterToMethod($method, $parameter);
                $args[] = new Literal(sprintf('$%s', NameHelper::safeVariableName($parameter->name)));
            }

            if ($endpoint->bodySchema) {
                $dtoNamespaceSuffix = NameHelper::optionalNamespaceSuffix($this->config->dtoNamespaceSuffix);
                $dtoNamespace = "{$this->config->namespace}{$dtoNamespaceSuffix}";

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
                if (in_array($parameter->name, $this->config->ignoredQueryParams)) {
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

            $path = $this->buildGenericPath($endpoint->pathSegments);
            $httpMethod = strtolower($endpoint->method->value);
            $isRestricted = isset($restrictedOperations->{$path}->operations->{$httpMethod});

            if ($isRestricted) {
                $namespace->addUse(RestrictedDataTokenAuthenticator::class);

                $useGenericPath = $restrictedOperations->{$path}->genericPath;
                $knownDataElements = $restrictedOperations->{$path}->operations->{$httpMethod};
                $method->addBody(
                    new Literal(sprintf(
                        '$authenticator = $this->connector->restrictedAuth(%s, \'%s\', %s);',
                        $useGenericPath ? "'$path'" : '$request->resolveEndpoint()',
                        strtoupper($httpMethod),
                        '['.implode(', ', array_map(fn ($el) => "'$el'", $knownDataElements)).']'
                    ))
                );
                $method->addBody('$request->authenticate($authenticator);');
            } elseif (isset($grantlessScopes->{$path}->{$httpMethod})) {
                $namespace
                    ->addUse(GrantlessAuthenticator::class)
                    ->addUse(GrantlessScope::class);
                $scope = GrantlessScope::from($grantlessScopes->{$path}->{$httpMethod});

                $method->addBody(
                    new Literal(sprintf(
                        '$authenticator = $this->connector->grantlessAuth(GrantlessScope::%s);',
                        $scope->name
                    ))
                );
                $method->addBody('$request->authenticate($authenticator);');
            }

            $method->addBody('return $this->connector->send($request);');
        }

        $namespace->add($classType);

        return $classFile;
    }

    private function buildGenericPath($segments): string
    {
        $path = '/'.implode('/', $segments);
        $withBraces = preg_replace('/\:([a-zA-Z0-9_]+)(\/|$)/', '{$1}$2', $path);

        return $withBraces;
    }
}
