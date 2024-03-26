<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ParkingConfiguration extends BaseDto
{
    /**
     * @param  ?string  $parkingCostType  The parking cost type.
     * @param  ?string  $parkingSpotIdentificationType  The type of parking spot identification.
     * @param  ?int  $numberOfParkingSpots  An unsigned integer that can be only positive or zero.
     */
    public function __construct(
        public readonly ?string $parkingCostType = null,
        public readonly ?string $parkingSpotIdentificationType = null,
        public readonly ?int $numberOfParkingSpots = null,
    ) {
    }
}
