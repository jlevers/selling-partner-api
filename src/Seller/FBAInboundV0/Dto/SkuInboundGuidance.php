<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SkuInboundGuidance extends BaseDto
{
    protected static array $attributeMap = [
        'sellerSku' => 'SellerSKU',
        'asin' => 'ASIN',
        'inboundGuidance' => 'InboundGuidance',
        'guidanceReasonList' => 'GuidanceReasonList',
    ];

    /**
     * @param  string  $sellerSku  The seller SKU of the item.
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $inboundGuidance  Specific inbound guidance for an item.
     * @param  ?string[]  $guidanceReasonList  A list of inbound guidance reason information.
     */
    public function __construct(
        public readonly string $sellerSku,
        public readonly string $asin,
        public readonly string $inboundGuidance,
        public readonly ?array $guidanceReasonList = null,
    ) {
    }
}
