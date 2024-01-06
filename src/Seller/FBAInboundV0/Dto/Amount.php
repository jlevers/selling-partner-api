<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Amount extends BaseDto
{
    /**
     * @param  string  $currencyCode The currency code.
     */
    public function __construct(
        public readonly ?string $currencyCode = null,
        public readonly ?float $value = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
