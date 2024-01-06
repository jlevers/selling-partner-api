<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetShipmentItemsResult extends BaseDto
{
    protected static array $complexArrayTypes = ['itemData' => [InboundShipmentItem::class]];

    /**
     * @param  InboundShipmentItem[]  $itemData A list of inbound shipment item information.
     * @param  string  $nextToken When present and not empty, pass this string token in the next request to return the next response page.
     */
    public function __construct(
        public readonly array $itemData,
        public readonly string $nextToken,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
