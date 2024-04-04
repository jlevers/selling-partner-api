<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator\Schema;

use GuzzleHttp\Client;
use Illuminate\Support\Str;
use InvalidArgumentException;
use SellingPartnerApi\Generator\Generator;
use SellingPartnerApi\Generator\Package;
use SellingPartnerApi\Generator\Schema;
use stdClass;
use voku\helper\HtmlDomParser;

class SchemaVersion
{
    public function __construct(
        public Schema $schema,
        public string $url,
        public string $version,
        public bool $latest = false,
        public bool $deprecated = false,
        public ?string $selector = null,
    ) {
    }

    /**
     * Generate the code for this version of this schema.
     */
    public function generate(): void
    {
        $schemaVersionCode = $this->id();
        Generator::$currentlyGenerating = $schemaVersionCode;

        $baseNamespace = Package::namespace();
        $categoryNamespace = ucfirst($this->schema->category->value);
        $schemaNamespace = $this->studlyName();

        $inputPath = $this->path();
        $generator = Generator::make([
            'namespace' => "$baseNamespace\\$categoryNamespace\\$schemaNamespace",
            'outputDir' => "src/$categoryNamespace/$schemaNamespace",
        ]);
        $result = $generator->run($inputPath);
        $result->dumpFiles();

        Generator::$currentlyGenerating = null;
    }

    public function refactor(): void
    {
        $schema = json_decode(file_get_contents($this->path(true)));

        foreach ($schema->paths as $path => $operations) {
            $ops = new stdClass;
            foreach ($operations as $method => $operation) {
                // Amazon sometimes puts random data in the operations list
                if (! in_array($method, ['get', 'post', 'put', 'patch', 'delete'])) {
                    continue;
                }

                // Standardize tags
                $operation->tags = [$this->studlyName()];

                foreach ($operation->responses as $code => $response) {
                    $content = new stdClass;
                    foreach ($response->content as $contentType => $mediaType) {
                        // Sometimes Amazon puts response payload examples in the response content list,
                        // which is not valid OpenAPI spec. This regex will have some false positives, but
                        // it should be fine for our purposes.
                        $regex = '/^(application|audio|image|message|multipart|text|video)\/.+$/';
                        if (! preg_match($regex, $contentType)) {
                            continue;
                        }
                        $content->{$contentType} = $mediaType;
                    }
                    $response->content = $content;
                    $operation->responses->{$code} = $response;
                }
                $ops->{$method} = $operation;
            }
            $schema->paths->{$path} = $operations;
        }

        $schema = $this->modifySchema($schema);

        $path = $this->path();
        $pathDir = dirname($path);
        if (! is_dir($pathDir)) {
            mkdir($pathDir, 0755, true);
        }
        file_put_contents(
            $path,
            json_encode($schema, JSON_PRETTY_PRINT)
        );
    }

    /**
     * Download the schema, converting it from Swagger 2.0 to OpenAPI 3.0 in the process.
     */
    public function download(): void
    {
        $client = new Client();
        $convertUrl = 'https://converter.swagger.io/api/convert';

        if ($this->selector !== null) {
            $fullPage = $client->get($this->url);
            $html = HtmlDomParser::str_get_html($fullPage->getBody()->getContents());
            $rawSchemaData = $html->findOne($this->selector)->text();
            $originalJson = json_decode(html_entity_decode($rawSchemaData));

            $res = $client->post($convertUrl, [
                'json' => $originalJson,
            ]);
        } else {
            $res = $client->get($convertUrl, [
                'query' => ['url' => $this->url],
            ]);
        }
        $json = json_decode($res->getBody()->getContents());

        $path = $this->path(true);
        $pathDir = dirname($path);
        if (! is_dir($pathDir)) {
            mkdir($pathDir, 0755, true);
        }
        file_put_contents(
            $path,
            json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
        );
    }

    /**
     * Get the path for this schema version.
     *
     * @param  bool  $upstream  If true, return the path where original Amazon schemas are stored.
     */
    public function path(bool $upstream = false): string
    {
        return "{$this->schema->path($upstream)}/v{$this->version}.json";
    }

    public function studlyName(): string
    {
        return Str::studly($this->schema->name).'V'.str_replace('-', '', $this->version);
    }

    protected function id(): string
    {
        return "{$this->schema->category->value}.{$this->schema->code}.{$this->version}";
    }

    protected function modifySchema(stdClass &$schema): stdClass
    {
        $modifications = json_decode(file_get_contents(METADATA_DIR.'/modifications.json'));
        $schemaMods = data_get($modifications, $this->id(), []);

        foreach ($schemaMods as $mod) {
            $original = data_get($schema, $mod->path);
            $modified = match ($mod->action) {
                'delete' => null,
                'replace' => $mod->value,
                'merge' => match (true) {
                    is_array($original) => array_merge($original, $mod->value),
                    is_object($original) => (object) array_merge((array) $original, (array) $mod->value),
                    default => throw new InvalidArgumentException('Cannot merge scalar schema values'),
                },
                default => throw new InvalidArgumentException("Invalid schema modification action '{$mod->action}'"),
            };

            if ($modified === null) {
                data_forget($schema, $mod->path);
            } else {
                data_set($schema, $mod->path, $modified);
            }
        }

        return $schema;
    }
}
