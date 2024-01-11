<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitShipmentConfirmationsRequest extends BaseDto
{
	protected static array $complexArrayTypes = ['shipmentConfirmations' => [ShipmentConfirmation::class]];


	/**
	 * @param ShipmentConfirmation[] $shipmentConfirmations
	 * @param ?mixed $additionalProperties
	 */
	public function __construct(
		public readonly ?array $shipmentConfirmations = null,
		mixed ...$additionalProperties,
	) {
		parent::__construct(...$additionalProperties);
	}
}
