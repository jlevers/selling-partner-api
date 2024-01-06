<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AdditionalSellerInput extends BaseDto
{
    /**
     * @param  string  $dataType The data type of the additional information.
     * @param  string  $valueAsString The value when the data type is string.
     * @param  bool  $valueAsBoolean The value when the data type is boolean.
     * @param  int  $valueAsInteger The value when the data type is integer.
     * @param  Address  $valueAsAddress The postal address information.
     * @param  Weight  $valueAsWeight The weight.
     * @param  Length  $valueAsDimension The length.
     * @param  CurrencyAmount  $valueAsCurrency Currency type and amount.
     */
    public function __construct(
        public readonly string $dataType,
        public readonly string $valueAsString,
        public readonly bool $valueAsBoolean,
        public readonly int $valueAsInteger,
        public readonly string $valueAsTimestamp,
        public readonly Address $valueAsAddress,
        public readonly Weight $valueAsWeight,
        public readonly Length $valueAsDimension,
        public readonly CurrencyAmount $valueAsCurrency,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
