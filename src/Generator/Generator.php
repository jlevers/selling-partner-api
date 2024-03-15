<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator;

use Crescat\SaloonSdkGenerator\CodeGenerator;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Generators\NullGenerator;
use SellingPartnerApi\Generator\Generators\BaseResourceGenerator;
use SellingPartnerApi\Generator\Generators\RequestGenerator;
use SellingPartnerApi\Generator\Generators\ResourceGenerator;

class Generator
{
    /**
     * Create a new code generator instance.
     */
    public static function make(array $overrides = []): CodeGenerator
    {
        $config = Config::load(GENERATOR_CONFIG_FILE, $overrides);

        return new CodeGenerator(
            $config,
            requestGenerator: new RequestGenerator($config),
            resourceGenerator: new ResourceGenerator($config),
            connectorGenerator: new NullGenerator($config),
            baseResourceGenerator: new BaseResourceGenerator($config),
            fileHandler: new FileHandler($config),
        );
    }
}
