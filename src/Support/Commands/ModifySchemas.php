<?php declare(strict_types=1);

namespace SellingPartnerApi\Support\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'schema:modify',
    description: 'Convert the original Amazon schemas downloaded by the library into a format that can be used by the library'
)]
class ModifySchemas extends Command
{
    use HasSchemaArgs;

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->schemas = static::filterSchemas($input);

        foreach ($this->schemas as $api) {
        }

        return 0;
    }
}
