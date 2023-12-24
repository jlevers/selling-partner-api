<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator\Schema;

use GuzzleHttp\Client;
use SellingPartnerApi\Generator\Generator;
use SellingPartnerApi\Generator\Package;
use SellingPartnerApi\Generator\Schema;
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
        $baseNamespace = Package::namespace();
        $categoryNamespace = ucfirst($this->schema->category->value);
        $compressedSchemaName = str_replace(' ', '', $this->schema->name).'V'.$this->version;

        $inputPath = $this->path();
        $generator = Generator::make([
            'namespace' => "$baseNamespace\\$categoryNamespace",
            'outputDir' => "src/$categoryNamespace/$compressedSchemaName",
        ]);
        $result = $generator->run($inputPath);
        $result->dumpFiles();
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

        file_put_contents(
            $this->path(true),
            json_encode($json, JSON_PRETTY_PRINT)
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

    public static function generateSupportingFiles(): void
    {
        $libName = Package::name();
        $version = Package::version();
        // Static path -- this won't actually be used since we're only generating supporting files
        $schemaPath = MODEL_DIR.'/seller/sellers/v1.json';

        Generator::setPrettifyEnv();

        $generateCmd = "openapi-generator generate \
            --input-spec $schemaPath \
            --template-dir ".TEMPLATE_DIR." \
            --generator-name php \
            --config ".GENERATOR_CONFIG_FILE."\
            --engine handlebars \
            --global-property supportingFiles \
            --enable-post-process-file \
            --http-user-agent $libName/$version \
            --api-package ".CUSTOM_API_DIR." \
            --model-package ".CUSTOM_MODEL_DIR." \
            --openapi-normalizer KEEP_ONLY_FIRST_TAG_IN_OPERATION=true \
            2>&1";

        Generator::execAndLog($generateCmd);
    }
}
