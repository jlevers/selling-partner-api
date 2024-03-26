<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemLevelFields extends BaseDto
{
    protected static array $attributeMap = ['asin' => 'Asin', 'additionalInputs' => 'AdditionalInputs'];

    protected static array $complexArrayTypes = ['additionalInputs' => [AdditionalInputs::class]];

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  AdditionalInputs[]  $additionalInputs  A list of additional inputs.
     */
    public function __construct(
        public readonly string $asin,
        public readonly array $additionalInputs,
    ) {
    }
}
