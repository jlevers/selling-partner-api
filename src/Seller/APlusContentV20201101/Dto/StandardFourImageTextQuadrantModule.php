<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardFourImageTextQuadrantModule extends Dto
{
    /**
     * @param  StandardImageTextBlock  $block1  The A+ Content standard image and text box block.
     * @param  StandardImageTextBlock  $block2  The A+ Content standard image and text box block.
     * @param  StandardImageTextBlock  $block3  The A+ Content standard image and text box block.
     * @param  StandardImageTextBlock  $block4  The A+ Content standard image and text box block.
     */
    public function __construct(
        public readonly StandardImageTextBlock $block1,
        public readonly StandardImageTextBlock $block2,
        public readonly StandardImageTextBlock $block3,
        public readonly StandardImageTextBlock $block4,
    ) {
    }
}
