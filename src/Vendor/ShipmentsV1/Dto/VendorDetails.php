<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class VendorDetails extends BaseDto
{
	/**
	 * @param ?PartyIdentification $sellingParty
	 * @param ?string $vendorShipmentId Unique vendor shipment id which is not used in last 365 days
	 * @param ?mixed $additionalProperties
	 */
	public function __construct(
		public readonly ?PartyIdentification $sellingParty = null,
		public readonly ?string $vendorShipmentId = null,
		mixed ...$additionalProperties,
	) {
		parent::__construct(...$additionalProperties);
	}
}
