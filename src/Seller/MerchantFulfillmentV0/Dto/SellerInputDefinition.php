<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SellerInputDefinition extends BaseDto
{
    protected static array $attributeMap = [
        'isRequired' => 'IsRequired',
        'dataType' => 'DataType',
        'constraints' => 'Constraints',
        'inputDisplayText' => 'InputDisplayText',
        'storedValue' => 'StoredValue',
        'inputTarget' => 'InputTarget',
        'restrictedSetValues' => 'RestrictedSetValues',
    ];

    protected static array $complexArrayTypes = ['constraints' => [Constraint::class]];

    /**
     * @param  bool  $isRequired  When true, the additional input field is required.
     * @param  string  $dataType  The data type of the additional input field.
     * @param  Constraint[]  $constraints  List of constraints.
     * @param  string  $inputDisplayText  The display text for the additional input field.
     * @param  AdditionalSellerInput  $storedValue  Additional information required to purchase shipping.
     * @param  ?string  $inputTarget  Indicates whether the additional seller input is at the item or shipment level.
     * @param  ?string[]  $restrictedSetValues  The set of fixed values in an additional seller input.
     */
    public function __construct(
        public readonly bool $isRequired,
        public readonly string $dataType,
        public readonly array $constraints,
        public readonly string $inputDisplayText,
        public readonly AdditionalSellerInput $storedValue,
        public readonly ?string $inputTarget = null,
        public readonly ?array $restrictedSetValues = null,
    ) {
    }
}
