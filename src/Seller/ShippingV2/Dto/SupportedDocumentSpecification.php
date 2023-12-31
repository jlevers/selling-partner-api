<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SupportedDocumentSpecification extends BaseDto
{
    protected static array $complexArrayTypes = ['printOptions' => [PrintOption::class]];

    /**
     * @param  string  $documentFormat The file format of the document.
     * @param  DocumentSize  $documentSize The size dimensions of the label.
     * @param  PrintOption[]  $printOptions A list of the format options for a label.
     */
    public function __construct(
        public readonly ?string $documentFormat = null,
        public readonly ?DocumentSize $documentSize = null,
        public readonly ?array $printOptions = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
