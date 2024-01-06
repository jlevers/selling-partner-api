<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetInboundGuidanceResult extends BaseDto
{
    protected static array $complexArrayTypes = [
        'skuInboundGuidanceList' => [SkuInboundGuidance::class],
        'invalidSkuList' => [InvalidSku::class],
        'asinInboundGuidanceList' => [AsinInboundGuidance::class],
        'invalidAsinList' => [InvalidAsin::class],
    ];

    /**
     * @param  SkuInboundGuidance[]  $skuInboundGuidanceList A list of SKU inbound guidance information.
     * @param  InvalidSku[]  $invalidSkuList A list of invalid SKU values and the reason they are invalid.
     * @param  AsinInboundGuidance[]  $asinInboundGuidanceList A list of ASINs and their associated inbound guidance.
     * @param  InvalidAsin[]  $invalidAsinList A list of invalid ASIN values and the reasons they are invalid.
     */
    public function __construct(
        public readonly array $skuInboundGuidanceList,
        public readonly array $invalidSkuList,
        public readonly array $asinInboundGuidanceList,
        public readonly array $invalidAsinList,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
