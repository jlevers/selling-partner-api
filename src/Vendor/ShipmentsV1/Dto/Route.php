<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Route extends BaseDto
{
	protected static array $complexArrayTypes = ['stops' => [Stop::class]];


	/**
	 * @param Stop[] $stops
	 * @param ?mixed $additionalProperties
	 */
	public function __construct(
		public readonly ?array $stops = null,
		mixed ...$additionalProperties,
	) {
		parent::__construct(...$additionalProperties);
	}
}
