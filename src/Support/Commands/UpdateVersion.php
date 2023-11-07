<?php
declare(strict_types=1);

namespace SellingPartnerApi\Support\Commands;

use Composer\Semver\Comparator;
use Composer\Semver\VersionParser;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use UnexpectedValueException;

#[AsCommand(name: 'update-version')]
class UpdateVersion extends Command
{
    public static function downloadSchemas(): void
    {

    }

    public static function customizeSchemas(): void
    {

    }

    public static function generateModels(): void
    {

    }

    public static function generateApis(): void
    {

    }

    public static function generateSupportingFiles(): void
    {

    }

    /**
     * Get the current version code for the library.
     *
     * @return string
     */
    public static function libVersion(): string
    {
        $configPath = RESOURCE_DIR . '/generator-config.json';
        $config = json_decode(file_get_contents($configPath), true);
        $rawVersion = $config['artifactVersion'];

        $versionParser = new VersionParser();
        // This will throw an exception if the version is invalid
        return $versionParser->normalize($rawVersion);
    }

    /**
     * Interactively change the current version code for the library, by editing
     * the generator-config.json file.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $currentVersion = static::libVersion();
        $newVersion = null;
        do {
            try {
                $newVersionRaw = readline("Current version is {$currentVersion}. Enter new version: ");
                $versionParser = new VersionParser();
                $newVersion = $versionParser->normalize($newVersionRaw);
            } catch (UnexpectedValueException $e) {
                echo $e->getMessage() . ". Please try again.\n";
            }
        } while (!$newVersion);

        if (Comparator::equalTo($currentVersion, $newVersion)) {
            echo "New version is the same as the current version. Exiting...\n";
            return 0;
        }

        $config['artifactVersion'] = $newVersion;
        file_put_contents(
            RESOURCE_DIR . '/generator-config.json',
            json_encode($config, JSON_PRETTY_PRINT)
        );

        $regenerate = userBool(readline("Version {$newVersion} has been saved to config.\nDo you want to re-generate versioning-related library files? [Y/n] "));
        $commit = userBool(readline("Do you want to commit version-related file changes? [Y/n] "));

        if (!$regenerate) {
            return 0;
        }

        exec('cd ..');
        if ($commit) {
            exec('git stash --include-untracked');
        }

        generateSupportingFiles();

        if (!$commit) {
            echo "Done regenerating files.\n";
            return 0;
        }

        exec("cd .. && git add . && git commit -m 'Update package version to $newVersion' && git stash pop");

        echo "\nVersioning-related changes have been committed.\n";
        return 0;
    }

    /**
     * Clean the generated files from the default model and api directories.
     *
     * @return void
     */
    public static function clean(): void
    {

    }
}
