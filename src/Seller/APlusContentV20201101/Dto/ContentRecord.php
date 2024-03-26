<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ContentRecord extends BaseDto
{
    /**
     * @param  string  $contentReferenceKey  A unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier.
     * @param  ?ContentMetadata  $contentMetadata  The metadata of an A+ Content document.
     * @param  ?ContentDocument  $contentDocument  The A+ Content document. This is the enhanced content that is published to product detail pages.
     */
    public function __construct(
        public readonly string $contentReferenceKey,
        public readonly ?ContentMetadata $contentMetadata = null,
        public readonly ?ContentDocument $contentDocument = null,
    ) {
    }
}
