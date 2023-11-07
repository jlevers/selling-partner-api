<?php declare(strict_types=1);

namespace SellingPartnerApi\Support\Commands;

use Exception;
use GuzzleHttp\Client;
use SellingPartnerApi\Support\Schema;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use voku\helper\HtmlDomParser;

#[AsCommand(
    name: 'schema:download',
    description: 'Download the latest schemas for the Selling Partner API'
)]
class DownloadSchemas extends AbstractSchemasCommand
{
    use HasSchemaArgs;

    protected function handleSchema(Schema $schema): int
    {
        echo "Retrieving schema verisons for {$schema->category->value} category {$schema->code}\n";

        try {
            $schema->download();
        } catch (Exception $e) {
            echo "Failed to download {$schema->code} schema: {$e->getMessage()}\n";
            return 1;
        }

        echo "Downloaded {$schema->code} schema\n";
        return 0;
    }
}
