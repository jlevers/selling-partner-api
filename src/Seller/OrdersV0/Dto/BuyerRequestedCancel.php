<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class BuyerRequestedCancel extends Dto
{
    protected static array $attributeMap = [
        'isBuyerRequestedCancel' => 'IsBuyerRequestedCancel',
        'buyerCancelReason' => 'BuyerCancelReason',
    ];

    /**
     * @param  ?bool  $isBuyerRequestedCancel  When true, the buyer has requested cancellation.
     * @param  ?string  $buyerCancelReason  The reason that the buyer requested cancellation.
     */
    public function __construct(
        public readonly ?bool $isBuyerRequestedCancel = null,
        public readonly ?string $buyerCancelReason = null,
    ) {
    }
}
