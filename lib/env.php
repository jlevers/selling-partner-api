<?php

namespace SellingPartnerApi;

use \Exception;

// Check the parent directory, and then 4 directories up. If this package is being
// used standalone, then a .env file in its root directory (__DIR__ . "/..") would
// be sensible. If this package is being used with Composer, then this file would
// likely be in <project>/vendor/jlevers/selling-partner-api/lib/. That is, the
// root directory of the project that this package is being used in would be 4
// directories above this one. The third directory option is just used for testing.
const ENV_PATHS = [__DIR__ . "/..", __DIR__ . "/../../../..", __DIR__ . "/../.."];

const REQUIRED_ENVVARS = [
    "SPAPI_AWS_REGION",
    "AWS_ACCESS_KEY_ID",
    "AWS_SECRET_ACCESS_KEY",
    "LWA_CLIENT_ID",
    "LWA_CLIENT_SECRET",
    "SPAPI_ENDPOINT",
];

function loadDotenv(): void {
    foreach(ENV_PATHS as $path) {
        if (file_exists($path . "/.env")) {
            $dotenv = \Dotenv\Dotenv::createImmutable($path);
            $dotenv->load();

            foreach (REQUIRED_ENVVARS as $var) {
                $dotenv->required($var)->notEmpty();
            }

            // Validate environment variables
            $dotenv->required("SPAPI_AWS_REGION")->allowedValues(["us-east-1", "us-west-2", "eu-west-1", "eu-central-1"]);
            $dotenv->required("SPAPI_ENDPOINT")->allowedValues([
                "https://sellingpartnerapi-na.amazon.com",
                "https://sellingpartnerapi-eu.amazon.com",
                "https://sellingpartnerapi-fe.amazon.com",
            ]);

            return;
        }
    }

    throw new Exception("No .env file found.");
}

function allVarsLoaded(): bool {
    foreach (REQUIRED_ENVVARS as $var) {
        if (!isset($_ENV[$var])) {
            return false;
        }
    }
    return true;
}
