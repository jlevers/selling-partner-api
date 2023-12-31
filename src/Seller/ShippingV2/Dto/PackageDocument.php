<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PackageDocument extends BaseDto
{
    /**
     * @param  string  $documentType The type of shipping document.
     * @param  string  $documentFormat The file format of the document.
     * @param  string  $contents A Base64 encoded string of the file contents.
     */
    public function __construct(
        public readonly ?string $documentType = null,
        public readonly ?string $documentFormat = null,
        public readonly ?string $contents = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
