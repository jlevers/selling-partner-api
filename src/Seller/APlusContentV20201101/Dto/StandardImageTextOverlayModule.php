<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardImageTextOverlayModule extends Dto
{
    /**
     * @param  string  $overlayColorType  The relative color scheme of content.
     * @param  ?StandardImageTextBlock  $block  The A+ Content standard image and text box block.
     */
    public function __construct(
        public readonly string $overlayColorType,
        public readonly ?StandardImageTextBlock $block = null,
    ) {
    }
}
