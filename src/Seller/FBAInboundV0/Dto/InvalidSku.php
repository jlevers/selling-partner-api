<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InvalidSku extends BaseDto
{
    /**
     * @param  string  $sellerSku The seller SKU of the item.
     * @param  string  $errorReason The reason that the ASIN is invalid.
     */
    public function __construct(
        public readonly string $sellerSku,
        public readonly string $errorReason,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
