<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class InStorePickupConfiguration extends Dto
{
    /**
     * @param  ?bool  $isSupported  When true, in-store pickup is supported by the supply source (default: `isSupported` value in `PickupChannel`).
     * @param  ?ParkingConfiguration  $parkingConfiguration  The parking configuration.
     */
    public function __construct(
        public readonly ?bool $isSupported = null,
        public readonly ?ParkingConfiguration $parkingConfiguration = null,
    ) {
    }
}
