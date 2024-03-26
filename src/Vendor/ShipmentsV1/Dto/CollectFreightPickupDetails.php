<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CollectFreightPickupDetails extends BaseDto
{
    /**
     * @param  ?DateTime  $requestedPickUp  Date on which the items can be picked up from vendor warehouse by Buyer used for WePay/Collect vendors.
     * @param  ?DateTime  $scheduledPickUp  Date on which the items are scheduled to be picked from vendor warehouse by Buyer used for WePay/Collect vendors.
     * @param  ?DateTime  $carrierAssignmentDate  Date on which the carrier is being scheduled to pickup items from vendor warehouse by Byer used for WePay/Collect vendors.
     */
    public function __construct(
        public readonly ?\DateTime $requestedPickUp = null,
        public readonly ?\DateTime $scheduledPickUp = null,
        public readonly ?\DateTime $carrierAssignmentDate = null,
    ) {
    }
}
