<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateScheduledPackagesRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['orderScheduleDetailsList' => [OrderScheduleDetails::class]];

    /**
     * @param  string  $marketplaceId A string of up to 255 characters.
     * @param  string  $labelFormat The file format in which the shipping label will be created.
     * @param  OrderScheduleDetails[]  $orderScheduleDetailsList An array allowing users to specify orders to be scheduled.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $labelFormat,
        public readonly ?array $orderScheduleDetailsList = null,
    ) {
    }
}
