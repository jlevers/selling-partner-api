<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InboundShipmentRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['inboundShipmentItems' => [InboundShipmentItem::class]];

    /**
     * @param  InboundShipmentHeader  $inboundShipmentHeader Inbound shipment information used to create and update inbound shipments.
     * @param  InboundShipmentItem[]  $inboundShipmentItems A list of inbound shipment item information.
     * @param  string  $marketplaceId A marketplace identifier. Specifies the marketplace where the product would be stored.
     */
    public function __construct(
        public readonly ?InboundShipmentHeader $inboundShipmentHeader = null,
        public readonly ?array $inboundShipmentItems = null,
        public readonly ?string $marketplaceId = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
