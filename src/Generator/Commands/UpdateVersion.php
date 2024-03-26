<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator\Commands;

use Composer\Semver\Comparator;
use Composer\Semver\VersionParser;
use SellingPartnerApi\Generator\Package;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use UnexpectedValueException;

#[AsCommand(
    name: 'library:update-version',
    description: 'Interactively update the library version, and optionally make and commit any version-related file changes'
)]
class UpdateVersion extends Command
{
    /**
     * Interactively change the current version code for the library, by editing
     * the generator-config.json file.
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $currentVersion = Package::version();
        $newVersion = null;
        do {
            try {
                $newVersionRaw = readline("Current version is {$currentVersion}. Enter new version: ");
                $versionParser = new VersionParser();
                $newVersion = $versionParser->normalize($newVersionRaw);
                $newVersion = implode('.', array_slice(explode('.', $newVersion), 0, 3));
            } catch (UnexpectedValueException $e) {
                echo $e->getMessage().". Please try again.\n";
            }
        } while (! $newVersion);

        if (Comparator::equalTo($currentVersion, $newVersion)) {
            echo "New version is the same as the current version. Exiting...\n";

            return 0;
        }

        $ynCommit = strtolower(readline('Do you want to commit version-related file changes? [Y/n] '));
        $commit = $ynCommit === 'y' || $ynCommit === 'yes';
        if ($commit) {
            exec('git stash --include-untracked');
        }

        $config = json_decode(file_get_contents(GENERATOR_CONFIG_FILE), true);
        $config['version'] = $newVersion;
        file_put_contents(GENERATOR_CONFIG_FILE, json_encode($config, JSON_PRETTY_PRINT)."\n");

        $composerFile = ROOT_DIR.'/composer.json';
        $composerConfig = json_decode(file_get_contents($composerFile), true);
        $composerConfig['version'] = $newVersion;
        file_put_contents(
            $composerFile,
            json_encode($composerConfig, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)."\n"
        );

        if (! $commit) {
            return 0;
        }

        $configFile = GENERATOR_CONFIG_FILE;
        exec("git add $configFile $composerFile && git commit -m 'Update package version to $newVersion' && git stash pop");

        echo "\nVersioning-related changes have been committed.\n";

        return 0;
    }
}
