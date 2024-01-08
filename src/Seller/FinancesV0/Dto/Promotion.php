<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Promotion extends BaseDto
{
    /**
     * @param  ?string  $promotionType The type of promotion.
     * @param  ?string  $promotionId The seller-specified identifier for the promotion.
     * @param  ?Currency  $promotionAmount A currency type and amount.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $promotionType = null,
        public readonly ?string $promotionId = null,
        public readonly ?Currency $promotionAmount = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
