<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardImageTextCaptionBlock extends Dto
{
    /**
     * @param  ?StandardImageTextBlock  $block  The A+ Content standard image and text box block.
     * @param  ?TextComponent  $caption  Rich text content.
     */
    public function __construct(
        public readonly ?StandardImageTextBlock $block = null,
        public readonly ?TextComponent $caption = null,
    ) {
    }
}
