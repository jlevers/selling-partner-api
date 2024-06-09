<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class ShippingConfiguration extends Dto
{
    /**
     * @param  ?string  $shippingMode  Mode of shipment transportation that this option will provide. Can be: `GROUND_SMALL_PARCEL`, `FREIGHT_LTL`, `FREIGHT_FTL_PALLET`, `FREIGHT_FTL_NONPALLET`, `OCEAN_LCL`, `OCEAN_FCL`, `AIR_SMALL_PARCEL`, `AIR_SMALL_PARCEL_EXPRESS`.
     * @param  ?string  $shippingSolution  Shipping program for the option. Can be: `AMAZON_PARTNERED_CARRIER`, `USE_YOUR_OWN_CARRIER`.
     */
    public function __construct(
        public readonly ?string $shippingMode = null,
        public readonly ?string $shippingSolution = null,
    ) {
    }
}
