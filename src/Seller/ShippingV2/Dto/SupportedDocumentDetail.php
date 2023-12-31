<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SupportedDocumentDetail extends BaseDto
{
    /**
     * @param  bool  $isMandatory When true, the supported document type is required.
     * @param  string  $documentType The type of shipping document.
     */
    public function __construct(
        public readonly bool $isMandatory,
        public readonly ?string $documentType = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
