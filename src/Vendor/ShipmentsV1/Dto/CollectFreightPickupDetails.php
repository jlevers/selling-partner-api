<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class CollectFreightPickupDetails extends Dto
{
    /**
     * @param  ?\DateTimeInterface  $requestedPickUp  Date on which the items can be picked up from vendor warehouse by Buyer used for WePay/Collect vendors.
     * @param  ?\DateTimeInterface  $scheduledPickUp  Date on which the items are scheduled to be picked from vendor warehouse by Buyer used for WePay/Collect vendors.
     * @param  ?\DateTimeInterface  $carrierAssignmentDate  Date on which the carrier is being scheduled to pickup items from vendor warehouse by Byer used for WePay/Collect vendors.
     */
    public function __construct(
        public readonly ?\DateTimeInterface $requestedPickUp = null,
        public readonly ?\DateTimeInterface $scheduledPickUp = null,
        public readonly ?\DateTimeInterface $carrierAssignmentDate = null,
    ) {
    }
}
