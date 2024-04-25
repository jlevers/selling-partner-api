<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator;

class Package
{
    /**
     * Get the current version code for the package.
     */
    public static function version(): string
    {
        $config = json_decode(file_get_contents(GENERATOR_CONFIG_FILE), true);
        $rawVersion = $config['version'];

        return $rawVersion;
    }

    /**
     * Get the package's name.
     */
    public static function name(): string
    {
        return json_decode(file_get_contents(__DIR__.'/../../composer.json'), true)['name'];
    }

    /**
     * Get the base namespace for the package.
     */
    public static function namespace(): string
    {
        return json_decode(file_get_contents(GENERATOR_CONFIG_FILE), true)['namespace'];
    }
}
