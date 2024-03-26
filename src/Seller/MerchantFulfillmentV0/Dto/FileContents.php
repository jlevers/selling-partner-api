<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FileContents extends BaseDto
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
