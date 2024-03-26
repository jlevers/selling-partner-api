<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AdditionalInputs extends BaseDto
{
    protected static array $attributeMap = [
        'additionalInputFieldName' => 'AdditionalInputFieldName',
        'sellerInputDefinition' => 'SellerInputDefinition',
    ];

    /**
     * @param  ?string  $additionalInputFieldName  The field name.
     * @param  ?SellerInputDefinition  $sellerInputDefinition  Specifies characteristics that apply to a seller input.
     */
    public function __construct(
        public readonly ?string $additionalInputFieldName = null,
        public readonly ?SellerInputDefinition $sellerInputDefinition = null,
    ) {
    }
}
