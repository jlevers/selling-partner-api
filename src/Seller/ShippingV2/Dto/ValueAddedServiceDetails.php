<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class ValueAddedServiceDetails extends Dto
{
    /**
     * @param  ?CollectOnDelivery  $collectOnDelivery  The amount to collect on delivery.
     */
    public function __construct(
        public readonly ?CollectOnDelivery $collectOnDelivery = null,
    ) {
    }
}
