<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CollectFreightPickupDetails extends BaseDto
{
	/**
	 * @param ?string $requestedPickUp Date on which the items can be picked up from vendor warehouse by Buyer used for WePay/Collect vendors.
	 * @param ?string $scheduledPickUp Date on which the items are scheduled to be picked from vendor warehouse by Buyer used for WePay/Collect vendors.
	 * @param ?string $carrierAssignmentDate Date on which the carrier is being scheduled to pickup items from vendor warehouse by Byer used for WePay/Collect vendors.
	 * @param ?mixed $additionalProperties
	 */
	public function __construct(
		public readonly ?string $requestedPickUp = null,
		public readonly ?string $scheduledPickUp = null,
		public readonly ?string $carrierAssignmentDate = null,
		mixed ...$additionalProperties,
	) {
		parent::__construct(...$additionalProperties);
	}
}
