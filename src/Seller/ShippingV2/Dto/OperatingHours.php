<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class OperatingHours extends Dto
{
    protected static array $complexArrayTypes = ['midDayClosures' => [TimeOfDay::class]];

    /**
     * @param  ?TimeOfDay  $closingTime  Denotes time of the day, used for defining opening or closing time of access points
     * @param  ?TimeOfDay  $openingTime  Denotes time of the day, used for defining opening or closing time of access points
     * @param  TimeOfDay[]|null  $midDayClosures
     */
    public function __construct(
        public readonly ?TimeOfDay $closingTime = null,
        public readonly ?TimeOfDay $openingTime = null,
        public readonly ?array $midDayClosures = null,
    ) {
    }
}
