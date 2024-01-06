<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InboundShipmentResult extends BaseDto
{
    /**
     * @param  string  $shipmentId The shipment identifier submitted in the request.
     */
    public function __construct(
        public readonly ?string $shipmentId = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
