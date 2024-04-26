<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use SellingPartnerApi\Dto;

final class ScheduledDeliveryShipment extends Dto
{
    /**
     * @param  ?string  $scheduledDeliveryServiceType  Scheduled delivery service type.
     * @param  ?DateTime  $earliestNominatedDeliveryDate  Earliest nominated delivery date for the scheduled delivery.
     * @param  ?DateTime  $latestNominatedDeliveryDate  Latest nominated delivery date for the scheduled delivery.
     */
    public function __construct(
        public readonly ?string $scheduledDeliveryServiceType = null,
        public readonly ?\DateTime $earliestNominatedDeliveryDate = null,
        public readonly ?\DateTime $latestNominatedDeliveryDate = null,
    ) {
    }
}
