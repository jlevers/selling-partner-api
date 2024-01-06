<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TransportHeader extends BaseDto
{
    /**
     * @param  string  $sellerId The Amazon seller identifier.
     * @param  string  $shipmentId A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  bool  $isPartnered Indicates whether a putTransportDetails request is for a partnered carrier.
     *
     * Possible values:
     *
     * * true – Request is for an Amazon-partnered carrier.
     *
     * * false – Request is for a non-Amazon-partnered carrier.
     * @param  string  $shipmentType Specifies the carrier shipment type in a putTransportDetails request.
     */
    public function __construct(
        public readonly ?string $sellerId = null,
        public readonly ?string $shipmentId = null,
        public readonly ?bool $isPartnered = null,
        public readonly ?string $shipmentType = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
