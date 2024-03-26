<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ValueAddedServiceDetails extends BaseDto
{
    /**
     * @param  ?CollectOnDelivery  $collectOnDelivery  The amount to collect on delivery.
     */
    public function __construct(
        public readonly ?CollectOnDelivery $collectOnDelivery = null,
    ) {
    }
}
