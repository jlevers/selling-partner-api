<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InStorePickupConfiguration extends BaseDto
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
