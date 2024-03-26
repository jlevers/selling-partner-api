<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SupportedDocumentDetail extends BaseDto
{
    /**
     * @param  string  $name  The type of shipping document.
     * @param  bool  $isMandatory  When true, the supported document type is required.
     */
    public function __construct(
        public readonly string $name,
        public readonly bool $isMandatory,
    ) {
    }
}
