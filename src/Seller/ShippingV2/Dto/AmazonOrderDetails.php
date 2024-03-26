<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AmazonOrderDetails extends BaseDto
{
    /**
     * @param  string  $orderId  The Amazon order ID associated with the Amazon order fulfilled by this shipment.
     */
    public function __construct(
        public readonly string $orderId,
    ) {
    }
}
