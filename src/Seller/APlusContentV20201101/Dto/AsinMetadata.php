<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AsinMetadata extends BaseDto
{
    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN).
     * @param  ?string[]  $badgeSet  The set of ASIN badges.
     * @param  ?string  $parent  The Amazon Standard Identification Number (ASIN).
     * @param  ?string  $title  The title for the ASIN in the Amazon catalog.
     * @param  ?string  $imageUrl  The default image for the ASIN in the Amazon catalog.
     * @param  ?string[]  $contentReferenceKeySet  A set of content reference keys.
     */
    public function __construct(
        public readonly string $asin,
        public readonly ?array $badgeSet = null,
        public readonly ?string $parent = null,
        public readonly ?string $title = null,
        public readonly ?string $imageUrl = null,
        public readonly ?array $contentReferenceKeySet = null,
    ) {
    }
}
