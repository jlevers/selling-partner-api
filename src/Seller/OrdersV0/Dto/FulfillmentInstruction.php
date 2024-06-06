<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class FulfillmentInstruction extends Dto
{
    protected static array $attributeMap = ['fulfillmentSupplySourceId' => 'FulfillmentSupplySourceId'];

    /**
     * @param  ?string  $fulfillmentSupplySourceId  Denotes the recommended `sourceId` where the order should be fulfilled from.
     */
    public function __construct(
        public readonly ?string $fulfillmentSupplySourceId = null,
    ) {
    }
}
