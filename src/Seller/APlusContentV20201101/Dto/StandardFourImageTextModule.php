<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardFourImageTextModule extends BaseDto
{
    /**
     * @param  ?TextComponent  $headline  Rich text content.
     * @param  ?StandardImageTextBlock  $block1  The A+ Content standard image and text box block.
     * @param  ?StandardImageTextBlock  $block2  The A+ Content standard image and text box block.
     * @param  ?StandardImageTextBlock  $block3  The A+ Content standard image and text box block.
     * @param  ?StandardImageTextBlock  $block4  The A+ Content standard image and text box block.
     */
    public function __construct(
        public readonly ?TextComponent $headline = null,
        public readonly ?StandardImageTextBlock $block1 = null,
        public readonly ?StandardImageTextBlock $block2 = null,
        public readonly ?StandardImageTextBlock $block3 = null,
        public readonly ?StandardImageTextBlock $block4 = null,
    ) {
    }
}
