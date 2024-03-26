<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetInboundGuidanceResult extends BaseDto
{
    protected static array $attributeMap = [
        'skuInboundGuidanceList' => 'SKUInboundGuidanceList',
        'invalidSkuList' => 'InvalidSKUList',
        'asinInboundGuidanceList' => 'ASINInboundGuidanceList',
        'invalidAsinList' => 'InvalidASINList',
    ];

    protected static array $complexArrayTypes = [
        'skuInboundGuidanceList' => [SkuInboundGuidance::class],
        'invalidSkuList' => [InvalidSku::class],
        'asinInboundGuidanceList' => [AsinInboundGuidance::class],
        'invalidAsinList' => [InvalidAsin::class],
    ];

    /**
     * @param  SkuInboundGuidance[]|null  $skuInboundGuidanceList  A list of SKU inbound guidance information.
     * @param  InvalidSku[]|null  $invalidSkuList  A list of invalid SKU values and the reason they are invalid.
     * @param  AsinInboundGuidance[]|null  $asinInboundGuidanceList  A list of ASINs and their associated inbound guidance.
     * @param  InvalidAsin[]|null  $invalidAsinList  A list of invalid ASIN values and the reasons they are invalid.
     */
    public function __construct(
        public readonly ?array $skuInboundGuidanceList = null,
        public readonly ?array $invalidSkuList = null,
        public readonly ?array $asinInboundGuidanceList = null,
        public readonly ?array $invalidAsinList = null,
    ) {
    }
}
