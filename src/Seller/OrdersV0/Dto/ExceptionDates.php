<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ExceptionDates extends BaseDto
{
    protected static array $attributeMap = [
        'exceptionDate' => 'ExceptionDate',
        'isOpen' => 'IsOpen',
        'openIntervals' => 'OpenIntervals',
    ];

    protected static array $complexArrayTypes = ['openIntervals' => [OpenInterval::class]];

    /**
     * @param  ?string  $exceptionDate  Date when the business is closed, in ISO-8601 date format.
     * @param  ?bool  $isOpen  Boolean indicating if the business is closed or open on that date.
     * @param  OpenInterval[]|null  $openIntervals  Time window during the day when the business is open.
     */
    public function __construct(
        public readonly ?string $exceptionDate = null,
        public readonly ?bool $isOpen = null,
        public readonly ?array $openIntervals = null,
    ) {
    }
}
