<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator\Commands;

use SellingPartnerApi\Generator\Schema;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
    name: 'schema:download',
    description: 'Download the latest schemas for the Selling Partner API'
)]
class DownloadSchemas extends AbstractSchemasCommand
{
    use HasSchemaArgs;

    protected function handleSchema(Schema $schema): int
    {
        $schema->download();

        return 0;
    }
}
