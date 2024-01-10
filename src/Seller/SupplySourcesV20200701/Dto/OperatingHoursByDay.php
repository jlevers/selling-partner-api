<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OperatingHoursByDay extends BaseDto
{
    protected static array $complexArrayTypes = [
        'monday' => [OperatingHour::class],
        'tuesday' => [OperatingHour::class],
        'wednesday' => [OperatingHour::class],
        'thursday' => [OperatingHour::class],
        'friday' => [OperatingHour::class],
        'saturday' => [OperatingHour::class],
        'sunday' => [OperatingHour::class],
    ];

    /**
     * @param  OperatingHour[]  $monday A list of Operating Hours.
     * @param  OperatingHour[]  $tuesday A list of Operating Hours.
     * @param  OperatingHour[]  $wednesday A list of Operating Hours.
     * @param  OperatingHour[]  $thursday A list of Operating Hours.
     * @param  OperatingHour[]  $friday A list of Operating Hours.
     * @param  OperatingHour[]  $saturday A list of Operating Hours.
     * @param  OperatingHour[]  $sunday A list of Operating Hours.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?array $monday = null,
        public readonly ?array $tuesday = null,
        public readonly ?array $wednesday = null,
        public readonly ?array $thursday = null,
        public readonly ?array $friday = null,
        public readonly ?array $saturday = null,
        public readonly ?array $sunday = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
