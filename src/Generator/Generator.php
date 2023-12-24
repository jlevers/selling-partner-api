<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator;

use Crescat\SaloonSdkGenerator\CodeGenerator;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Generators\NullGenerator;

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
            connectorGenerator: new NullGenerator($config),
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
