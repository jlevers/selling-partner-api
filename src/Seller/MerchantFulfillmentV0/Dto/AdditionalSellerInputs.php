<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AdditionalSellerInputs extends BaseDto
{
    protected static array $attributeMap = [
        'additionalInputFieldName' => 'AdditionalInputFieldName',
        'additionalSellerInput' => 'AdditionalSellerInput',
    ];

    /**
     * @param  string  $additionalInputFieldName  The name of the additional input field.
     * @param  AdditionalSellerInput  $additionalSellerInput  Additional information required to purchase shipping.
     */
    public function __construct(
        public readonly string $additionalInputFieldName,
        public readonly AdditionalSellerInput $additionalSellerInput,
    ) {
    }
}
