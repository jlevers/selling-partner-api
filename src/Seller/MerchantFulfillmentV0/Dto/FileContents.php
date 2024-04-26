<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class FileContents extends Dto
{
    protected static array $attributeMap = ['contents' => 'Contents', 'fileType' => 'FileType', 'checksum' => 'Checksum'];

    /**
     * @param  string  $contents  Data for printing labels, in the form of a Base64-encoded, GZip-compressed string.
     * @param  string  $fileType  The file type for a label.
     * @param  string  $checksum  An MD5 hash to validate the PDF document data, in the form of a Base64-encoded string.
     */
    public function __construct(
        public readonly string $contents,
        public readonly string $fileType,
        public readonly string $checksum,
    ) {
    }
}
