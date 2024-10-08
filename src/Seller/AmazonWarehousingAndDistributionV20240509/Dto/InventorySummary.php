<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto;

use SellingPartnerApi\Dto;

final class InventorySummary extends Dto
{
    /**
     * @param  string  $sku  The seller or merchant SKU.
     * @param  ?InventoryDetails  $inventoryDetails  Additional inventory details. This object is only displayed if the details parameter in the request is set to `SHOW`.
     * @param  ?int  $totalInboundQuantity  Total quantity that is in-transit from the seller and has not yet been received at an AWD Distribution Center
     * @param  ?int  $totalOnhandQuantity  Total quantity that is present in AWD distribution centers.
     */
    public function __construct(
        public readonly string $sku,
        public readonly ?InventoryDetails $inventoryDetails = null,
        public readonly ?int $totalInboundQuantity = null,
        public readonly ?int $totalOnhandQuantity = null,
    ) {}
}
