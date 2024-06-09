<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class DeliveryWindowOption extends Dto
{
    /**
     * @param  string  $availabilityType  Identifies type of Delivery Window Availability. Values: `AVAILABLE`, `CONGESTED`
     * @param  string  $deliveryWindowOptionId  Identifier of a delivery window option. A delivery window option represent one option for when a shipment is expected to be delivered.
     * @param  DateTime  $endDate  The timestamp at which this delivery window option ends. This is based in ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     * @param  DateTime  $startDate  The timestamp at which this delivery window option starts. This is based in ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     * @param  DateTime  $validUntil  The timestamp at which this window delivery option becomes no longer valid. This is based in ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     */
    public function __construct(
        public readonly string $availabilityType,
        public readonly string $deliveryWindowOptionId,
        public readonly \DateTime $endDate,
        public readonly \DateTime $startDate,
        public readonly \DateTime $validUntil,
    ) {
    }
}
