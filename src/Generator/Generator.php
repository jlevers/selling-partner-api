<?php declare(strict_types=1);

namespace SellingPartnerApi\Generator;

class Generator
{
    /**
     * Execute a command. If it succeeds, return. Otherwise exit with command's exit code.
     * Logs the command's output to the log file.
     *
     * @param string $cmd The command to execute
     * @return void
     */
    public static function execAndLog(string $cmd): void
    {
        $resultCode = 0;
        $output = [];
        exec($cmd, $output, $resultCode);

        file_put_contents(LOGFILE, implode("\n", $output) . "\n", FILE_APPEND);

        if ($resultCode > 0) {
            echo "Error executing command\n";
            exit($resultCode);
        }
    }

    /**
     * Set the relevant environment variables to ensure the OpenAPI generator's output
     * files are prettified.
     *
     * @return void
     */
    public static function setPrettifyEnv(): void
    {
        $projectRoot = __DIR__ . '/../..';
        putenv("PHP_POST_PROCESS_FILE=$projectRoot/vendor/bin/php-cs-fixer fix --allow-risky=yes --config $projectRoot/.php-cs-fixer.dist.php");
    }
}
