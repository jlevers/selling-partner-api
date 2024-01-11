<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ContainerSequenceNumbers extends BaseDto
{
	/**
	 * @param ?string $containerSequenceNumber A list of containers shipped
	 * @param ?mixed $additionalProperties
	 */
	public function __construct(
		public readonly ?string $containerSequenceNumber = null,
		mixed ...$additionalProperties,
	) {
		parent::__construct(...$additionalProperties);
	}
}
