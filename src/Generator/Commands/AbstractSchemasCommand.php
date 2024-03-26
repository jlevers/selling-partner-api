<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator\Commands;

use Exception;
use SellingPartnerApi\Generator\Schema;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractSchemasCommand extends Command
{
    use HasSchemaArgs;

    /**
     * Execute the command, given the input arguments/options via $input and the output interface
     * via $output. Filters the schemas to be processed based on the input, and then calls the
     * handleSchema() method for each schema.
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->schemas = static::filterSchemas($input);

        foreach ($this->schemas as $schema) {
            echo "Handling schema {$schema->code} ...\n";

            try {
                $returnCode = $this->handleSchema($schema);
                if ($returnCode > 0) {
                    return $returnCode;
                }
            } catch (Exception $e) {
                echo "\n\nFailed to handle schema {$schema->code}: {$e->getMessage()}\n";

                return 1;
            }

            echo "Done\n";
        }

        return 0;
    }

    /**
     * The method that will be called for each schema matching the input options.
     *
     * @return int The exit code for the command for a particular schema.
     */
    abstract protected function handleSchema(Schema $schema): int;
}
