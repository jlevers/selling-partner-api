<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator\Commands;

use SellingPartnerApi\Generator\Schema;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
    name: 'schema:generate',
    description: 'Generate code from schemas'
)]
class GenerateSchemas extends AbstractSchemasCommand
{
    use HasSchemaArgs;

    protected function handleSchema(Schema $schema): int
    {
        foreach ($schema->versions() as $version) {
            $schema->generate($version);
        }

        return 0;
    }
}
