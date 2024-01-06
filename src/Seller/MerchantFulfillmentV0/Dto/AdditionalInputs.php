<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AdditionalInputs extends BaseDto
{
    /**
     * @param  string  $additionalInputFieldName The field name.
     * @param  SellerInputDefinition  $sellerInputDefinition Specifies characteristics that apply to a seller input.
     */
    public function __construct(
        public readonly string $additionalInputFieldName,
        public readonly SellerInputDefinition $sellerInputDefinition,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
