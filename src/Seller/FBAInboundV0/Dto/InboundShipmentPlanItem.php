<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InboundShipmentPlanItem extends BaseDto
{
    protected static array $attributeMap = [
        'sellerSku' => 'SellerSKU',
        'fulfillmentNetworkSku' => 'FulfillmentNetworkSKU',
        'quantity' => 'Quantity',
        'prepDetailsList' => 'PrepDetailsList',
    ];

    protected static array $complexArrayTypes = ['prepDetailsList' => [PrepDetails::class]];

    /**
     * @param  string  $sellerSku  The seller SKU of the item.
     * @param  string  $fulfillmentNetworkSku  Amazon's fulfillment network SKU of the item.
     * @param  int  $quantity  The item quantity.
     * @param  PrepDetails[]|null  $prepDetailsList  A list of preparation instructions and who is responsible for that preparation.
     */
    public function __construct(
        public readonly string $sellerSku,
        public readonly string $fulfillmentNetworkSku,
        public readonly int $quantity,
        public readonly ?array $prepDetailsList = null,
    ) {
    }
}
