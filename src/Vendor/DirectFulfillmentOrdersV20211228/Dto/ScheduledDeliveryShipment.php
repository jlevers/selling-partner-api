<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ScheduledDeliveryShipment extends BaseDto
{
    /**
     * @param  ?string  $scheduledDeliveryServiceType Scheduled delivery service type.
     * @param  ?string  $earliestNominatedDeliveryDate Earliest nominated delivery date for the scheduled delivery.
     * @param  ?string  $latestNominatedDeliveryDate Latest nominated delivery date for the scheduled delivery.
     */
    public function __construct(
        public readonly ?string $scheduledDeliveryServiceType = null,
        public readonly ?string $earliestNominatedDeliveryDate = null,
        public readonly ?string $latestNominatedDeliveryDate = null,
    ) {
    }
}
