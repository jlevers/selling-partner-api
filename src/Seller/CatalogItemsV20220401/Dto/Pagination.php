<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class Pagination extends Dto
{
    /**
     * @param  ?string  $nextToken  A token that you can use to retrieve the next page.
     * @param  ?string  $previousToken  A token that you can use to retrieve the previous page.
     */
    public function __construct(
        public ?string $nextToken = null,
        public ?string $previousToken = null,
    ) {}
}
