<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class BuyerRequestedCancel extends BaseDto
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
