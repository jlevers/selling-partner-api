<?php declare(strict_types=1);

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
        public string|null $selector = null,
    ) {
    }

    /**
     * Generate the code for this version of this schema.
     *
     * @return void
     */
    public function generate(): void
    {
        Generator::setPrettifyEnv();

        $libName = Package::name();
        $version = Package::version();
        $categoryNamespace = ucfirst($this->schema->category->value);
        $compressedSchemaName = str_replace(' ', '', $this->schema->name);
        $nameAccessor = lcfirst($compressedSchemaName);

        $generateCmd = "openapi-generator generate \
            --input-spec {$this->path()} \
            --template-dir " . TEMPLATE_DIR . " \
            --generator-name php \
            --config " . GENERATOR_CONFIG . " \
            --engine handlebars \
            --global-property apis,models \
            --enable-post-process-file \
            --http-user-agent $libName/$version \
            --api-package \"" . CUSTOM_API_DIR . "\\$categoryNamespace\" \
            --model-package \"" . CUSTOM_API_DIR . "\\$categoryNamespace\\$compressedSchemaName\\" . CUSTOM_MODEL_DIR . "\" \
            --additional-properties=\"x-sp-api-category=$categoryNamespace,x-sp-api-accessor=$nameAccessor,x-sp-api-name=$compressedSchemaName,x-sp-api-version={$this->version},x-sp-api-latest={$this->latest},x-sp-api-deprecated={$this->deprecated}\" \
            2>&1";

        Generator::execAndLog($generateCmd);

        $defaultApiDocsPath = DOCS_DIR . '/' . DEFAULT_API_DIR;
        $defaultModelDocsPath = DOCS_DIR . '/' . DEFAULT_MODEL_DIR;
        // There is currently no way to change the docs output directories with the OpenAPI generator
        $apiDocSrcPath = "$defaultApiDocsPath/{$compressedSchemaName}Api.md";
        $modelDocSrcPath = "$defaultModelDocsPath/*.md";

        $apiDocDestPath = DOCS_DIR . '/' . CUSTOM_API_DIR . '/' . $categoryNamespace . '/';
        $modelDocDestPath = DOCS_DIR . '/' . CUSTOM_MODEL_DIR . "/$categoryNamespace/$compressedSchemaName/";

        // Create the documentation directories if they don't exist
        if (!file_exists($apiDocDestPath)) {
            mkdir($apiDocDestPath, 0755, true);
        }
        if (!file_exists($modelDocDestPath)) {
            mkdir($modelDocDestPath, 0755, true);
        }

        // Move the generated documentation to the correct directories
        Generator::execAndLog("mv $apiDocSrcPath $apiDocDestPath");

        if (count(glob($modelDocSrcPath)) > 0) {
            Generator::execAndLog("mv $modelDocSrcPath $modelDocDestPath");
        } else {
            echo "No model documentation found for {$this->schema->name} in category {$this->schema->category->value}\n";
        }

        // Delete default documentation directories if they are not in use
        if (
            DEFAULT_API_DIR !== CUSTOM_API_DIR
            && file_exists($defaultApiDocsPath)
            && count(scandir($defaultApiDocsPath)) === 2  // 2 because of . and ..
        ) {
            rmdir($defaultApiDocsPath);
        }
        if (
            DEFAULT_MODEL_DIR !== CUSTOM_MODEL_DIR
            && file_exists($defaultModelDocsPath)
            && count(scandir($defaultModelDocsPath)) === 2
        ) {
            rmdir($defaultModelDocsPath);
        }
    }

    /**
     * Download the schema, converting it from Swagger 2.0 to OpenAPI 3.0 in the process.
     *
     * @return void
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
     * @return string
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
        $schemaPath = MODEL_DIR . '/seller/sellers/v1.json';

        Generator::setPrettifyEnv();

        $generateCmd = "openapi-generator generate \
            --input-spec $schemaPath \
            --template-dir " . TEMPLATE_DIR . " \
            --generator-name php \
            --config " . GENERATOR_CONFIG . "\
            --engine handlebars \
            --global-property supportingFiles \
            --enable-post-process-file \
            --http-user-agent $libName/$version \
            --api-package " . CUSTOM_API_DIR . " \
            --model-package " . CUSTOM_MODEL_DIR . " \
            --openapi-normalizer KEEP_ONLY_FIRST_TAG_IN_OPERATION=true \
            2>&1";

        Generator::execAndLog($generateCmd);
    }
}
