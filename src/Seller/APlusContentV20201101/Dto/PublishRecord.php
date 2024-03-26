<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PublishRecord extends BaseDto
{
    /**
     * @param  string  $marketplaceId  The identifier for the marketplace where the A+ Content is published.
     * @param  string  $locale  The IETF language tag. This only supports the primary language subtag with one secondary language subtag. The secondary language subtag is almost always a regional designation. This does not support additional subtags beyond the primary and secondary subtags.
     *                          **Pattern:** ^[a-z]{2,}-[A-Z0-9]{2,}$
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN).
     * @param  string  $contentType  The A+ Content document type.
     * @param  string  $contentReferenceKey  A unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier.
     * @param  ?string  $contentSubType  The A+ Content document subtype. This represents a special-purpose type of an A+ Content document. Not every A+ Content document type will have a subtype, and subtypes may change at any time.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $locale,
        public readonly string $asin,
        public readonly string $contentType,
        public readonly string $contentReferenceKey,
        public readonly ?string $contentSubType = null,
    ) {
    }
}
