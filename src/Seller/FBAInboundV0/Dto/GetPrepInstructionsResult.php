<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetPrepInstructionsResult extends BaseDto
{
    protected static array $complexArrayTypes = [
        'skuPrepInstructionsList' => [SkuPrepInstructions::class],
        'invalidSkuList' => [InvalidSku::class],
        'asinPrepInstructionsList' => [AsinPrepInstructions::class],
        'invalidAsinList' => [InvalidAsin::class],
    ];

    /**
     * @param  SkuPrepInstructions[]  $skuPrepInstructionsList A list of SKU labeling requirements and item preparation instructions.
     * @param  InvalidSku[]  $invalidSkuList A list of invalid SKU values and the reason they are invalid.
     * @param  AsinPrepInstructions[]  $asinPrepInstructionsList A list of item preparation instructions.
     * @param  InvalidAsin[]  $invalidAsinList A list of invalid ASIN values and the reasons they are invalid.
     */
    public function __construct(
        public readonly array $skuPrepInstructionsList,
        public readonly array $invalidSkuList,
        public readonly array $asinPrepInstructionsList,
        public readonly array $invalidAsinList,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
