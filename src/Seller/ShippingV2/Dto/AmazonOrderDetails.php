<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class AmazonOrderDetails extends Dto
{
    /**
     * @param  string  $orderId  The Amazon order ID associated with the Amazon order fulfilled by this shipment.
     */
    public function __construct(
        public readonly string $orderId,
    ) {
    }
}
