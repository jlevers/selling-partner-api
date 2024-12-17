<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator\Commands;

use SellingPartnerApi\Enums\ApiCategory;
use SellingPartnerApi\Generator\Schema;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;

trait HasSchemaArgs
{
    /**
     * The schema definitions matching the input options given to the command.
     */
    protected array $schemas = [];

    /**
     * Parse the command line options for a Symfony command that can operate on
     * a subset of schemas, filtered by category or schema name.
     */
    protected function configure(): void
    {
        parent::configure();

        $availableSchemaCodes = [];
        $apiData = json_decode(file_get_contents(Schema::API_DATA_FILE), true);
        foreach ($apiData as $category) {
            foreach ($category as $code => $_) {
                $availableSchemaCodes[] = $code;
            }
        }
        $availableSchemaCodes = array_unique($availableSchemaCodes);

        $this->setDefinition([
            new InputOption(
                'category',
                mode: InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                description: 'A list of the Selling Partner API categories to generate (seller and/or vendor). If this option is not passed, both Seller and Vendor APIs will be generated.',
                suggestedValues: ApiCategory::values(),
            ),
            new InputOption(
                'schema',
                mode: InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                description: 'A list of the schemas to generate, based on the schema codes in resources/apis.json. If this option is not passed, all schemas will be generated.',
                suggestedValues: $availableSchemaCodes,
            ),
        ]);
    }

    /**
     * Retrieve metadata about the schemas matching the given input options.
     *
     * @return array The filtered categories and names.
     */
    protected static function filterSchemas(InputInterface $input): array
    {
        $categories = $input->getOption('category');
        $schemas = $input->getOption('schema');

        return Schema::where(
            is_string($categories) ? [$categories] : $categories,
            is_string($schemas) ? [$schemas] : $schemas,
        );
    }
}
