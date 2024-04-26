<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class GetShipmentsResult extends Dto
{
    protected static array $attributeMap = ['shipmentData' => 'ShipmentData', 'nextToken' => 'NextToken'];

    protected static array $complexArrayTypes = ['shipmentData' => [InboundShipmentInfo::class]];

    /**
     * @param  InboundShipmentInfo[]|null  $shipmentData  A list of inbound shipment information.
     * @param  ?string  $nextToken  When present and not empty, pass this string token in the next request to return the next response page.
     */
    public function __construct(
        public readonly ?array $shipmentData = null,
        public readonly ?string $nextToken = null,
    ) {
    }
}
