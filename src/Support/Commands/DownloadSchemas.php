<?php declare(strict_types=1);

namespace SellingPartnerApi\Support\Commands;

use GuzzleHttp\Client;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use voku\helper\HtmlDomParser;

#[AsCommand(
    name: 'build:download',
    description: 'Download the latest schemas for the Selling Partner API'
)]
class DownloadSchemas extends Command
{
    use HasSchemaArgs;

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->schemas = static::filterSchemas($input);

        $client = new Client([
            'headers' => [
                'Accept' => '*/*',
            ],
        ]);

        foreach ($this->schemas as $api) {
            $category = $api['category'];
            $apiCode = $api['code'];

            $savePath = MODEL_DIR . "/{$category->value}/{$apiCode}/";
            if (!file_exists($savePath)) {
                mkdir($savePath, 0755, true);
            }

            echo "Retrieving schemas for {$category->value} category {$apiCode}\n";

            foreach ($api['versions'] as $version) {
                $res = $client->get($version['url']);
                if (isset($version['selector'])) {
                    $html = HtmlDomParser::str_get_html($res->getBody()->getContents());
                    $rawSchemaData = $html->findOne($version['selector'])->text();
                    $json = json_decode(html_entity_decode($rawSchemaData));
                } else {
                    $json = json_decode($res->getBody()->getContents());
                }

                file_put_contents($version['path'], json_encode($json, JSON_PRETTY_PRINT));
            }

            echo "Downloaded {$apiCode} schema\n";
        }

        return 0;
    }
}
