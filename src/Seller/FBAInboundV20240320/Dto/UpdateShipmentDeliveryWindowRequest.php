<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class UpdateShipmentDeliveryWindowRequest extends Dto
{
    /**
     * @param  WindowInput  $deliveryWindow  Contains only a starting DateTime.
     */
    public function __construct(
        public readonly WindowInput $deliveryWindow,
    ) {
    }
}
