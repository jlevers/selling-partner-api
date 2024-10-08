<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto;

use SellingPartnerApi\Dto;

final class SkuQuantity extends Dto
{
    /**
     * @param  InventoryQuantity  $expectedQuantity  Quantity of inventory with an associated measurement unit context.
     * @param  string  $sku  The merchant stock keeping unit
     * @param  ?InventoryQuantity  $receivedQuantity  Quantity of inventory with an associated measurement unit context.
     */
    public function __construct(
        public readonly InventoryQuantity $expectedQuantity,
        public readonly string $sku,
        public readonly ?InventoryQuantity $receivedQuantity = null,
    ) {}
}
