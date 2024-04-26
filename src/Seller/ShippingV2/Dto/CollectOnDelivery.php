<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class CollectOnDelivery extends Dto
{
    /**
     * @param  Currency  $amount  The monetary value in the currency indicated, in ISO 4217 standard format.
     */
    public function __construct(
        public readonly Currency $amount,
    ) {
    }
}
