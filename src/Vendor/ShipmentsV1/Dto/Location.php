<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Location extends BaseDto
{
	/**
	 * @param ?string $type Type of location identification.
	 * @param ?string $locationCode Location code.
	 * @param ?string $countryCode The two digit country code. In ISO 3166-1 alpha-2 format.
	 * @param ?mixed $additionalProperties
	 */
	public function __construct(
		public readonly ?string $type = null,
		public readonly ?string $locationCode = null,
		public readonly ?string $countryCode = null,
		mixed ...$additionalProperties,
	) {
		parent::__construct(...$additionalProperties);
	}
}
