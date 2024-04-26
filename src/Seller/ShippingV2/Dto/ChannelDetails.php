<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class ChannelDetails extends Dto
{
    /**
     * @param  string  $channelType  The shipment source channel type.
     * @param  ?AmazonOrderDetails  $amazonOrderDetails  Amazon order information. This is required if the shipment source channel is Amazon.
     * @param  ?AmazonShipmentDetails  $amazonShipmentDetails  Amazon shipment information.
     */
    public function __construct(
        public readonly string $channelType,
        public readonly ?AmazonOrderDetails $amazonOrderDetails = null,
        public readonly ?AmazonShipmentDetails $amazonShipmentDetails = null,
    ) {
    }
}
