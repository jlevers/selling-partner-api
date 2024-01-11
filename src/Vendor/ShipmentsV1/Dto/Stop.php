<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Stop extends BaseDto
{
	/**
	 * @param string $functionCode Provide the function code.
	 * @param ?Location $locationIdentification Location identifier.
	 * @param ?string $arrivalTime Date and time of the arrival of the cargo.
	 * @param ?string $departureTime Date and time of the departure of the cargo.
	 * @param ?mixed $additionalProperties
	 */
	public function __construct(
		public readonly string $functionCode,
		public readonly ?Location $locationIdentification = null,
		public readonly ?string $arrivalTime = null,
		public readonly ?string $departureTime = null,
		mixed ...$additionalProperties,
	) {
		parent::__construct(...$additionalProperties);
	}
}
