<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator\Commands;

use SellingPartnerApi\Generator\Schema;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
    name: 'schema:refactor',
    description: 'Convert the original Amazon schemas downloaded by the library into a format that can be used by the library'
)]
class RefactorSchemas extends AbstractSchemasCommand
{
    protected function handleSchema(Schema $schema): int
    {
        $schema->refactor();

        return 0;
    }
}
