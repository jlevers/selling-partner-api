<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\DataKioskV20231115\Dto;

use SellingPartnerApi\Dto;

final class Pagination2 extends Dto
{
    /**
     * @param  ?string  $nextToken  A token that can be used to fetch the next page of results.
     */
    public function __construct(
        public ?string $nextToken = null,
    ) {}
}
