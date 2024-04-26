<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class PackageDocument extends Dto
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
