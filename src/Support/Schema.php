<?php
declare(strict_types=1);

namespace SellingPartnerApi\Support;

use InvalidArgumentException;
use SellingPartnerApi\Enums\ApiCategory;

class Schema
{
    public const API_DATA_FILE = RESOURCE_DIR . '/apis.json';

    /**
     * Get metadata about each of the schemas that match the given filters.
     * If $categories and/or $schemas are null, then all categories and/or
     * schemas will be included.
     *
     * @param  array|null  $categories
     * @param  array|null  $schemas
     * @throws  InvalidArgumentException
     * @return  array  All the schemas that match the given filters.
     *      Associative array, where each subarray is formatted like so:
     *      [
     *          'category' => ApiCategory  // The API's category code
     *          'code' => string,  // The code used internally to refer to the schema
     *          'name' => string,  // The human-readable name of the schema
     *          'versions' => [
     *              [
     *                  'version' => string,  // Amazon's code for this schema version
     *                  'path' => string,  // The local path where the schema file is stored
     *                  'latest' => bool,  // True if this is the most recent version of this schema
     *                  'deprecated' => bool,  // True if this schema has been deprecated
     *                  'url' => string,  // The URL to the upstream schema file
     *                  'selector' => string,  // If the upstream URL is HTML rather than raw JSON,
     *                                         // this is the selector to use to get the JSON data
     *              ],
     *              // ...
     *          ]
     *      ]
     */
    public static function schemas(array $categories, array $apiCodes): array
    {
        $apiData = json_decode(file_get_contents(static::API_DATA_FILE), true);

        $allCats = ApiCategory::values();
        $cats = null;
        if (is_null($categories) || $categories === []) {
            $cats = $allCats;
        } else {
            $cats = array_intersect($allCats, $categories);
        }

        if (empty($cats)) {
            throw new InvalidArgumentException('No matching categories found.');
        }

        $schemas = [];
        foreach ($cats as $cat) {
            $apis = null;
            $allCatApis = array_keys($apiData[$cat]);
            if (is_null($apiCodes) || $apiCodes === []) {
                $apis = $allCatApis;
            } else {
                $apis = array_intersect($allCatApis, $apiCodes);
            }

            if (empty($apis)) {
                echo "No matching API names found in the {$cat} category. Skipping...\n";
            }

            foreach ($apis as $api) {
                $schemaInfo = [
                    'category' => ApiCategory::from($cat),
                    'code' => $api,
                    'name' => $apiData[$cat][$api]['name'],
                ];

                $versions = $apiData[$cat][$api]['versions'];
                $latestVersionIdx = count($versions) - 1;
                foreach ($versions as $i => $version) {
                    $schemaInfo['versions'][] = [
                        ...$version,
                        'path' => MODEL_DIR . "/$cat/$api/v{$version['version']}.json",
                        'latest' => $i === $latestVersionIdx,
                        'deprecated' => $version['deprecated'] ?? false,
                    ];
                }
                $schemas[] = $schemaInfo;
            }
        }

        return $schemas;
    }
}
