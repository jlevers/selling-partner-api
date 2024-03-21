<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator\Generators;

use Crescat\SaloonSdkGenerator\BaseResponse;
use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\Schema;
use Crescat\SaloonSdkGenerator\Enums\SimpleType;
use Crescat\SaloonSdkGenerator\Generator as ApiGenerator;
use Crescat\SaloonSdkGenerator\Helpers\MethodGeneratorHelper;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
use Crescat\SaloonSdkGenerator\Helpers\Utils;
use Illuminate\Support\Arr;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpFile;
use SellingPartnerApi\Generator\Generator;

class ResponseGenerator extends ApiGenerator
{
    public array $traits = [];

    public function __construct(Config $config)
    {
        parent::__construct($config);

        $allTraits = json_decode(file_get_contents(METADATA_DIR.'/traits.json'), true);
        $this->traits = Arr::get($allTraits, Generator::$currentlyGenerating, []);
    }

    public function generate(ApiSpecification $specification): PhpFile|array
    {
        $classes = [];

        foreach ($specification->responses as $response) {
            $classes[] = $this->generateResponseClass($response);
        }

        return $classes;
    }

    public function generateResponseClass(Schema $schema): PhpFile
    {
        $className = NameHelper::responseClassName($schema->name);
        [$classFile, $namespace, $classType] = $this->makeClass($className, $this->config->responseNamespaceSuffix);

        $namespace->addUse(BaseResponse::class);

        $classType
            ->setFinal()
            ->setExtends(BaseResponse::class);

        $classConstructor = $classType->addMethod('__construct');

        $dtoNamespace = $this->config->dtoNamespace();
        $attributeMap = [];
        $complexArrayTypes = [];

        if ($schema->type === SimpleType::ARRAY->value) {
            $schema->items->name = NameHelper::safeVariableName($schema->name);
            MethodGeneratorHelper::addParameterToMethod(
                $classConstructor,
                $schema,
                namespace: $dtoNamespace,
                promote: true,
                visibility: 'public',
                readonly: true,
            );

            if ($schema->name !== $schema->rawName) {
                $attributeMap[$schema->name] = $schema->rawName;
            }

            if (! Utils::isBuiltInType($schema->items->type)) {
                $safeName = NameHelper::safeVariableName($schema->name);
                $complexArrayTypes[$safeName] = $schema->items;
            }
        } else {
            foreach ($schema->properties as $parameterName => $property) {
                $safeName = NameHelper::safeVariableName($parameterName);

                // Clone property before modifying to avoid any weird downstream effects
                $param = clone $property;
                // Make sure the constructor parameter is named the same thing as the parameter
                // in the original spec
                $param->name = $safeName;
                MethodGeneratorHelper::addParameterToMethod(
                    $classConstructor,
                    $param,
                    namespace: $dtoNamespace,
                    promote: true,
                    visibility: 'public',
                    readonly: true,
                );

                $type = $property->type;
                if (! Utils::isBuiltInType($type)) {
                    $safeType = NameHelper::dtoClassName($type);
                    $type = "{$dtoNamespace}\\{$safeType}";
                    $namespace->addUse($type);
                }

                if ($parameterName !== $safeName) {
                    $attributeMap[$safeName] = $property->rawName;
                }

                if (
                    $property->type === SimpleType::ARRAY->value
                    && $property->items
                    && ! Utils::isBuiltInType($property->items->type)
                ) {
                    $complexArrayTypes[$safeName] = $property->items;
                }
            }
        }

        if ($attributeMap) {
            $classType->addProperty('attributeMap', $attributeMap)
                ->setStatic()
                ->setType('array')
                ->setProtected();
        }

        if ($complexArrayTypes) {
            foreach ($complexArrayTypes as $name => $schema) {
                if ($schema->isResponse) {
                    $type = NameHelper::responseClassName($schema->type);
                    $namespacePath = $this->config->responseNamespace();
                } else {
                    $type = NameHelper::dtoClassName($schema->type);
                    $namespacePath = $dtoNamespace;
                }

                $fqn = "{$namespacePath}\\{$type}";
                $namespace->addUse($fqn);

                $literalType = new Literal(sprintf('%s::class', $type));
                $complexArrayTypes[$name] = [$literalType];
            }
            $classType->addProperty('complexArrayTypes', $complexArrayTypes)
                ->setStatic()
                ->setType('array')
                ->setProtected();
        }

        $traits = $this->traits[$className] ?? [];
        foreach ($traits as $traitClass) {
            $traitFullNs = PACKAGE_NAMESPACE."\\Traits\\$traitClass";
            $namespace->addUse($traitFullNs);
            $classType->addTrait($traitFullNs);
        }

        return $classFile;
    }
}
