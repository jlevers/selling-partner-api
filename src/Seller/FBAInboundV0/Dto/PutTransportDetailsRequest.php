<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PutTransportDetailsRequest extends BaseDto
{
    protected static array $attributeMap = [
        'isPartnered' => 'IsPartnered',
        'shipmentType' => 'ShipmentType',
        'transportDetails' => 'TransportDetails',
    ];

    /**
     * @param  bool  $isPartnered  Indicates whether a putTransportDetails request is for an Amazon-partnered carrier.
     * @param  string  $shipmentType  Specifies the carrier shipment type in a putTransportDetails request.
     * @param  TransportDetailInput  $transportDetails  Information required to create an Amazon-partnered carrier shipping estimate, or to alert the Amazon fulfillment center to the arrival of an inbound shipment by a non-Amazon-partnered carrier.
     */
    public function __construct(
        public readonly bool $isPartnered,
        public readonly string $shipmentType,
        public readonly TransportDetailInput $transportDetails,
    ) {
    }
}
