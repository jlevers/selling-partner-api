<?php

namespace Evers\SellingPartnerApi;

use \Exception;

// Check the parent directory, and then 4 directories up. If this package is being
// used standalone, then a .env file in its root directory (__DIR__ . "/..") would
// be sensible. If this package is being used with Composer, then this file would
// likely be in <project>/vendor/jlevers/selling-partner-api/lib/. That is, the
// root directory of the project that this package is being used in would be 4
// directories above this one.
const ENV_PATHS = [__DIR__ . "/..", __DIR__ . "/../../../.."];

function loadDotenv() {
    foreach(ENV_PATHS as $path) {
        if (file_exists($path . "/.env")) {
            $dotenv = \Dotenv\Dotenv::createImmutable($path);
            $dotenv->load();
            return;
        }
    }

    throw new Exception("No .env file found.");
}
