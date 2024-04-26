<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardHeaderTextListBlock extends Dto
{
    /**
     * @param  ?TextComponent  $headline  Rich text content.
     * @param  ?StandardTextListBlock  $block  The A+ Content standard fixed length list of text, usually presented as bullet points.
     */
    public function __construct(
        public readonly ?TextComponent $headline = null,
        public readonly ?StandardTextListBlock $block = null,
    ) {
    }
}
