<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AdditionalSellerInput extends BaseDto
{
    protected static array $attributeMap = [
        'dataType' => 'DataType',
        'valueAsString' => 'ValueAsString',
        'valueAsBoolean' => 'ValueAsBoolean',
        'valueAsInteger' => 'ValueAsInteger',
        'valueAsTimestamp' => 'ValueAsTimestamp',
        'valueAsAddress' => 'ValueAsAddress',
        'valueAsWeight' => 'ValueAsWeight',
        'valueAsDimension' => 'ValueAsDimension',
        'valueAsCurrency' => 'ValueAsCurrency',
    ];

    /**
     * @param  ?string  $dataType  The data type of the additional information.
     * @param  ?string  $valueAsString  The value when the data type is string.
     * @param  ?bool  $valueAsBoolean  The value when the data type is boolean.
     * @param  ?int  $valueAsInteger  The value when the data type is integer.
     * @param  ?DateTime  $valueAsTimestamp
     * @param  ?Address  $valueAsAddress  The postal address information.
     * @param  ?Weight  $valueAsWeight  The weight.
     * @param  ?Length  $valueAsDimension  The length.
     * @param  ?CurrencyAmount  $valueAsCurrency  Currency type and amount.
     */
    public function __construct(
        public readonly ?string $dataType = null,
        public readonly ?string $valueAsString = null,
        public readonly ?bool $valueAsBoolean = null,
        public readonly ?int $valueAsInteger = null,
        public readonly ?\DateTime $valueAsTimestamp = null,
        public readonly ?Address $valueAsAddress = null,
        public readonly ?Weight $valueAsWeight = null,
        public readonly ?Length $valueAsDimension = null,
        public readonly ?CurrencyAmount $valueAsCurrency = null,
    ) {
    }
}
