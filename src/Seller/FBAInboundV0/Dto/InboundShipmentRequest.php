<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InboundShipmentRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['inboundShipmentItems' => [InboundShipmentItem::class]];

    /**
     * @param  InboundShipmentHeader  $inboundShipmentHeader Inbound shipment information used to create and update inbound shipments.
     * @param  string  $marketplaceId A marketplace identifier. Specifies the marketplace where the product would be stored.
     * @param  InboundShipmentItem[]  $inboundShipmentItems A list of inbound shipment item information.
     */
    public function __construct(
        public readonly InboundShipmentHeader $inboundShipmentHeader,
        public readonly string $marketplaceId,
        public readonly ?array $inboundShipmentItems = null,
    ) {
    }
}
