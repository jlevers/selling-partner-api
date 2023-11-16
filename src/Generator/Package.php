<?php declare(strict_types=1);

namespace SellingPartnerApi\Generator;

use Composer\Semver\VersionParser;

class Package
{
    /**
     * Get the current version code for the package.
     *
     * @return string
     */
    public static function version(): string
    {
        $config = json_decode(file_get_contents(GENERATOR_CONFIG), true);
        $rawVersion = $config['artifactVersion'];

        $versionParser = new VersionParser();
        // This will throw an exception if the version is invalid
        return $versionParser->normalize($rawVersion);
    }

    /**
     * Get the package's name.
     *
     * @return string
     */
    public static function name(): string
    {
        return json_decode(file_get_contents(__DIR__ . '/../../composer.json'), true)['name'];
    }
}
