<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ContentDocument extends BaseDto
{
    protected static array $complexArrayTypes = ['contentModuleList' => [ContentModule::class]];

    /**
     * @param  string  $name  The A+ Content document name.
     * @param  string  $contentType  The A+ Content document type.
     * @param  string  $locale  The IETF language tag. This only supports the primary language subtag with one secondary language subtag. The secondary language subtag is almost always a regional designation. This does not support additional subtags beyond the primary and secondary subtags.
     *                          **Pattern:** ^[a-z]{2,}-[A-Z0-9]{2,}$
     * @param  ContentModule[]  $contentModuleList  A list of A+ Content modules.
     * @param  ?string  $contentSubType  The A+ Content document subtype. This represents a special-purpose type of an A+ Content document. Not every A+ Content document type will have a subtype, and subtypes may change at any time.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $contentType,
        public readonly string $locale,
        public readonly array $contentModuleList,
        public readonly ?string $contentSubType = null,
    ) {
    }
}
