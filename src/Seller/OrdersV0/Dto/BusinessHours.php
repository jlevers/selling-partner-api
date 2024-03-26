<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class BusinessHours extends BaseDto
{
    protected static array $attributeMap = ['dayOfWeek' => 'DayOfWeek', 'openIntervals' => 'OpenIntervals'];

    protected static array $complexArrayTypes = ['openIntervals' => [OpenInterval::class]];

    /**
     * @param  ?string  $dayOfWeek  Day of the week.
     * @param  OpenInterval[]|null  $openIntervals  Time window during the day when the business is open.
     */
    public function __construct(
        public readonly ?string $dayOfWeek = null,
        public readonly ?array $openIntervals = null,
    ) {
    }
}
