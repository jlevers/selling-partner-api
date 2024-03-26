<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentInstruction extends BaseDto
{
    protected static array $attributeMap = ['fulfillmentSupplySourceId' => 'FulfillmentSupplySourceId'];

    /**
     * @param  ?string  $fulfillmentSupplySourceId  Denotes the recommended sourceId where the order should be fulfilled from.
     */
    public function __construct(
        public readonly ?string $fulfillmentSupplySourceId = null,
    ) {
    }
}
