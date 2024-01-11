<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Duration extends BaseDto
{
	/**
	 * @param string $durationUnit Unit for duration.
	 * @param int $durationValue Value for the duration in terms of the durationUnit.
	 * @param ?mixed $additionalProperties
	 */
	public function __construct(
		public readonly string $durationUnit,
		public readonly int $durationValue,
		mixed ...$additionalProperties,
	) {
		parent::__construct(...$additionalProperties);
	}
}
