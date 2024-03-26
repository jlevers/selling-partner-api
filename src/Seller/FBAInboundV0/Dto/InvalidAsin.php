<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InvalidAsin extends BaseDto
{
    protected static array $attributeMap = ['asin' => 'ASIN', 'errorReason' => 'ErrorReason'];

    /**
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?string  $errorReason  The reason that the ASIN is invalid.
     */
    public function __construct(
        public readonly ?string $asin = null,
        public readonly ?string $errorReason = null,
    ) {
    }
}
