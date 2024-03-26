<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ScheduledPackageId extends BaseDto
{
    /**
     * @param  string  $amazonOrderId  An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship.
     * @param  ?string  $packageId  An Amazon-defined identifier for the scheduled package.
     */
    public function __construct(
        public readonly string $amazonOrderId,
        public readonly ?string $packageId = null,
    ) {
    }
}
