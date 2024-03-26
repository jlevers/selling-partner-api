<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PackageDocument extends BaseDto
{
    /**
     * @param  string  $type  The type of shipping document.
     * @param  string  $format  The file format of the document.
     * @param  string  $contents  A Base64 encoded string of the file contents.
     */
    public function __construct(
        public readonly string $type,
        public readonly string $format,
        public readonly string $contents,
    ) {
    }
}
