<?php declare(strict_types=1);

namespace SellingPartnerApi\Support;

use GuzzleHttp\Client;
use InvalidArgumentException;
use SellingPartnerApi\Enums\ApiCategory;
use SellingPartnerApi\Support\Schema\SchemaVersion;
use voku\helper\HtmlDomParser;

class Schema
{
    public const API_DATA_FILE = RESOURCE_DIR . '/apis.json';

    /**
     * The versions of this schema (as SchemaVersion objects).
     *
     * @var array<SchemaVersion>
     */
    private array $versions = [];

    public function __construct(
        public string $code,
        private string $name,
        public ApiCategory $category,
    ) {
    }

    /**
     * Download all the versions of this schema.
     *
     * @return  void
     */
    public function download(): void
    {
        $client = new Client();

        $savePath = $this->path();
        if (!file_exists($savePath)) {
            mkdir($savePath, 0755, true);
        }

        foreach ($this->versions as $version) {
            $res = $client->get($version->url);
            if ($version->selector !== null) {
                $html = HtmlDomParser::str_get_html($res->getBody()->getContents());
                $rawSchemaData = $html->findOne($version->selector)->text();
                $json = json_decode(html_entity_decode($rawSchemaData));
            } else {
                $json = json_decode($res->getBody()->getContents());
            }

            file_put_contents($this->path() . $version->filename(), json_encode($json, JSON_PRETTY_PRINT));
        }
    }

    /**
     * Get the path where versions of this schema are stored.
     *
     * @return string
     */
    public function path(): string
    {
        return MODEL_DIR . "/{$this->category->value}/{$this->code}/";
    }

    /**
     * Add a version to this schema.
     *
     * @param  SchemaVersion  $version
     * @return void
     */
    public function addVersion(SchemaVersion $version): void
    {
        $this->versions[] = $version;
    }

    /**
     * Get all schemas.
     *
     * @return array<Schema>
     */
    public static function all(): array
    {
        return static::where([], []);
    }

    /**
     * Get metadata about each of the schemas that match the given filters.
     * If $categories and/or $schemas are null, then all categories and/or
     * schemas will be included.
     *
     * @param  array|null  $categories
     * @param  array|null  $schemas
     * @throws  InvalidArgumentException
     * @return  array<Schema>  All the schemas that match the given filters.
     */
    public static function where(array $categories, array $apiCodes): array
    {
        $apiData = json_decode(file_get_contents(static::API_DATA_FILE), true);

        $allCats = ApiCategory::values();
        $cats = null;
        if ($categories === []) {
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
            if ($apiCodes === []) {
                $apis = $allCatApis;
            } else {
                $apis = array_intersect($allCatApis, $apiCodes);
            }

            if (empty($apis)) {
                echo "No matching API names found in the {$cat} category. Skipping...\n";
            }

            foreach ($apis as $api) {
                $schema = new Schema(
                    $api,
                    $apiData[$cat][$api]['name'],
                    ApiCategory::from($cat),
                );

                $versions = $apiData[$cat][$api]['versions'];
                $latestVersionIdx = count($versions) - 1;
                foreach ($versions as $i => $version) {
                    $schemaVersion = new SchemaVersion(
                        $version['url'],
                        // Casting to string because json_decode automatically casts numeric strings to ints
                        (string) $version['version'],
                        latest: $i === $latestVersionIdx,
                        deprecated: $version['deprecated'] ?? false,
                        selector: $version['selector'] ?? null,
                    );
                    $schema->addVersion($schemaVersion);
                }

                $schemas[] = $schema;
            }
        }

        return $schemas;
    }
}
