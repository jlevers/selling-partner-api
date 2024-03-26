<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ContentMetadataRecord extends BaseDto
{
    /**
     * @param  string  $contentReferenceKey  A unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier.
     * @param  ContentMetadata  $contentMetadata  The metadata of an A+ Content document.
     */
    public function __construct(
        public readonly string $contentReferenceKey,
        public readonly ContentMetadata $contentMetadata,
    ) {
    }
}
