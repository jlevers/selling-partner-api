<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DetailedShippingTimeType extends BaseDto
{
    /**
     * @param  ?int  $minimumHours  The minimum time, in hours, that the item will likely be shipped after the order has been placed.
     * @param  ?int  $maximumHours  The maximum time, in hours, that the item will likely be shipped after the order has been placed.
     * @param  ?string  $availableDate  The date when the item will be available for shipping. Only displayed for items that are not currently available for shipping.
     * @param  ?string  $availabilityType  Indicates whether the item is available for shipping now, or on a known or an unknown date in the future. If known, the availableDate property indicates the date that the item will be available for shipping. Possible values: NOW, FUTURE_WITHOUT_DATE, FUTURE_WITH_DATE.
     */
    public function __construct(
        public readonly ?int $minimumHours = null,
        public readonly ?int $maximumHours = null,
        public readonly ?string $availableDate = null,
        public readonly ?string $availabilityType = null,
    ) {
    }
}
