<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class RegulatedInformationField extends Dto
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
