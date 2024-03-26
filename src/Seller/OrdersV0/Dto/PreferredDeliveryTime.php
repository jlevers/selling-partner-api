<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PreferredDeliveryTime extends BaseDto
{
    protected static array $attributeMap = ['businessHours' => 'BusinessHours', 'exceptionDates' => 'ExceptionDates'];

    protected static array $complexArrayTypes = [
        'businessHours' => [BusinessHours::class],
        'exceptionDates' => [ExceptionDates::class],
    ];

    /**
     * @param  BusinessHours[]|null  $businessHours  Business hours when the business is open for deliveries.
     * @param  ExceptionDates[]|null  $exceptionDates  Dates when the business is closed in the next 30 days.
     */
    public function __construct(
        public readonly ?array $businessHours = null,
        public readonly ?array $exceptionDates = null,
    ) {
    }
}
