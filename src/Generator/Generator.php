<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator;

use Crescat\SaloonSdkGenerator\CodeGenerator;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Factory;
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
        Factory::registerParser('sp-api', Parser::class);
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

    /**
     * Execute a command. If it succeeds, return. Otherwise exit with command's exit code.
     * Logs the command's output to the log file.
     *
     * @param  string  $cmd The command to execute
     */
    public static function execAndLog(string $cmd): void
    {
        $resultCode = 0;
        $output = [];
        exec($cmd, $output, $resultCode);

        file_put_contents(LOGFILE, implode("\n", $output)."\n", FILE_APPEND);

        if ($resultCode > 0) {
            echo "Error executing command\n";
            exit($resultCode);
        }
    }
}
