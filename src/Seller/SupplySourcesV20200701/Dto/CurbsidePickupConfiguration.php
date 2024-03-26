<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CurbsidePickupConfiguration extends BaseDto
{
    /**
     * @param  ?bool  $isSupported  When true, curbside pickup is supported by the supply source.
     * @param  ?OperationalConfiguration  $operationalConfiguration  The operational configuration of `supplySources`.
     * @param  ?ParkingWithAddressConfiguration  $parkingWithAddressConfiguration  The parking configuration with the address.
     */
    public function __construct(
        public readonly ?bool $isSupported = null,
        public readonly ?OperationalConfiguration $operationalConfiguration = null,
        public readonly ?ParkingWithAddressConfiguration $parkingWithAddressConfiguration = null,
    ) {
    }
}
