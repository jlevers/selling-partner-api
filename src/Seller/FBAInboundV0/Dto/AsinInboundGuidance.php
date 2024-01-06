<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AsinInboundGuidance extends BaseDto
{
    /**
     * @param  string  $asin The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $inboundGuidance Specific inbound guidance for an item.
     * @param  string[]  $guidanceReasonList A list of inbound guidance reason information.
     */
    public function __construct(
        public readonly ?string $asin = null,
        public readonly ?string $inboundGuidance = null,
        public readonly ?array $guidanceReasonList = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
