<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV20240619\Dto;

use SellingPartnerApi\Dto;

final class SellingPartnerMetadata extends Dto
{
    /**
     * @param  ?string  $sellingPartnerId  Unique seller identifier.
     * @param  ?string  $accountType  Account type of transaction.
     * @param  ?string  $marketplaceId  Marketplace identifier of transaction.
     */
    public function __construct(
        public ?string $sellingPartnerId = null,
        public ?string $accountType = null,
        public ?string $marketplaceId = null,
    ) {}
}
