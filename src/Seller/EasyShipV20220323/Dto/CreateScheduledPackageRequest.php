<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateScheduledPackageRequest extends BaseDto
{
    /**
     * @param  string  $amazonOrderId  An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship.
     * @param  string  $marketplaceId  A string of up to 255 characters.
     * @param  PackageDetails  $packageDetails  Package details. Includes `packageItems`, `packageTimeSlot`, and `packageIdentifier`.
     */
    public function __construct(
        public readonly string $amazonOrderId,
        public readonly string $marketplaceId,
        public readonly PackageDetails $packageDetails,
    ) {
    }
}
