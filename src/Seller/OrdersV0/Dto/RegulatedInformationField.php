<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RegulatedInformationField extends BaseDto
{
    protected static array $attributeMap = [
        'fieldId' => 'FieldId',
        'fieldLabel' => 'FieldLabel',
        'fieldType' => 'FieldType',
        'fieldValue' => 'FieldValue',
    ];

    /**
     * @param  string  $fieldId  The unique identifier for the field.
     * @param  string  $fieldLabel  The name for the field.
     * @param  string  $fieldType  The type of field.
     * @param  string  $fieldValue  The content of the field as collected in regulatory form. Note that FileAttachment type fields will contain a URL to download the attachment here.
     */
    public function __construct(
        public readonly string $fieldId,
        public readonly string $fieldLabel,
        public readonly string $fieldType,
        public readonly string $fieldValue,
    ) {
    }
}
