<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\ShipmentsV1\Dto\ShipmentDetails;

final class GetShipmentDetailsResponse extends BaseResponse
{
	/**
	 * @param ?ShipmentDetails $shipmentDetails
	 * @param Error[] $errors A list of error responses returned when a request is unsuccessful.
	 */
	public function __construct(
		public readonly ?ShipmentDetails $shipmentDetails = null,
		public readonly ?array $errors = null,
	) {
	}
}
