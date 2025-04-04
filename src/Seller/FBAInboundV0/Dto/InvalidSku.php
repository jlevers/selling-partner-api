<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class InvalidSku extends Dto
{
    protected static array $attributeMap = ['sellerSku' => 'SellerSKU', 'errorReason' => 'ErrorReason'];

    /**
     * @param  ?string  $sellerSku  The seller SKU of the item.
     * @param  ?string  $errorReason  The reason that the ASIN is invalid.
     */
    public function __construct(
        public ?string $sellerSku = null,
        public ?string $errorReason = null,
    ) {}
}
