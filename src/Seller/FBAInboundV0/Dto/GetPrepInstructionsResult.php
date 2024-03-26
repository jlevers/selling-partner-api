<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetPrepInstructionsResult extends BaseDto
{
    protected static array $attributeMap = [
        'skuPrepInstructionsList' => 'SKUPrepInstructionsList',
        'invalidSkuList' => 'InvalidSKUList',
        'asinPrepInstructionsList' => 'ASINPrepInstructionsList',
        'invalidAsinList' => 'InvalidASINList',
    ];

    protected static array $complexArrayTypes = [
        'skuPrepInstructionsList' => [SkuPrepInstructions::class],
        'invalidSkuList' => [InvalidSku::class],
        'asinPrepInstructionsList' => [AsinPrepInstructions::class],
        'invalidAsinList' => [InvalidAsin::class],
    ];

    /**
     * @param  SkuPrepInstructions[]|null  $skuPrepInstructionsList  A list of SKU labeling requirements and item preparation instructions.
     * @param  InvalidSku[]|null  $invalidSkuList  A list of invalid SKU values and the reason they are invalid.
     * @param  AsinPrepInstructions[]|null  $asinPrepInstructionsList  A list of item preparation instructions.
     * @param  InvalidAsin[]|null  $invalidAsinList  A list of invalid ASIN values and the reasons they are invalid.
     */
    public function __construct(
        public readonly ?array $skuPrepInstructionsList = null,
        public readonly ?array $invalidSkuList = null,
        public readonly ?array $asinPrepInstructionsList = null,
        public readonly ?array $invalidAsinList = null,
    ) {
    }
}
