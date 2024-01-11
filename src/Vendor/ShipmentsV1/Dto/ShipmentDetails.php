<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentDetails extends BaseDto
{
	protected static array $complexArrayTypes = ['shipments' => [Shipment::class]];


	/**
	 * @param ?Pagination $pagination
	 * @param Shipment[] $shipments
	 * @param ?mixed $additionalProperties
	 */
	public function __construct(
		public readonly ?Pagination $pagination = null,
		public readonly ?array $shipments = null,
		mixed ...$additionalProperties,
	) {
		parent::__construct(...$additionalProperties);
	}
}
