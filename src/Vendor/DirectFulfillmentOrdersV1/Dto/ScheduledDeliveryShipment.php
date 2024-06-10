<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use SellingPartnerApi\Dto;

final class ScheduledDeliveryShipment extends Dto
{
    /**
     * @param  ?string  $scheduledDeliveryServiceType  Scheduled delivery service type.
     * @param  ?\DateTimeInterface  $earliestNominatedDeliveryDate  Earliest nominated delivery date for the scheduled delivery.
     * @param  ?\DateTimeInterface  $latestNominatedDeliveryDate  Latest nominated delivery date for the scheduled delivery.
     */
    public function __construct(
        public readonly ?string $scheduledDeliveryServiceType = null,
        public readonly ?\DateTimeInterface $earliestNominatedDeliveryDate = null,
        public readonly ?\DateTimeInterface $latestNominatedDeliveryDate = null,
    ) {
    }
}
