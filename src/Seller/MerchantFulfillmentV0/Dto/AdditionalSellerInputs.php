<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class AdditionalSellerInputs extends Dto
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
