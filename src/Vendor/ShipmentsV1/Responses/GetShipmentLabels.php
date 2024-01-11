<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\ShipmentsV1\Dto\TransportationLabels;

final class GetShipmentLabels extends BaseResponse
{
	/**
	 * @param ?TransportationLabels $transportationLabels
	 * @param Error[] $errors A list of error responses returned when a request is unsuccessful.
	 */
	public function __construct(
		public readonly ?TransportationLabels $transportationLabels = null,
		public readonly ?array $errors = null,
	) {
	}
}
