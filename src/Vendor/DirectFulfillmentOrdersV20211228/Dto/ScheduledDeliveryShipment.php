<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ScheduledDeliveryShipment extends BaseDto
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
