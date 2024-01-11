<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitShipments extends BaseDto
{
	protected static array $complexArrayTypes = ['shipments' => [Shipment::class]];


	/**
	 * @param Shipment[] $shipments
	 * @param ?mixed $additionalProperties
	 */
	public function __construct(
		public readonly ?array $shipments = null,
		mixed ...$additionalProperties,
	) {
		parent::__construct(...$additionalProperties);
	}
}
