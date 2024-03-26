<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardSingleSideImageModule extends BaseDto
{
    /**
     * @param  string  $imagePositionType  The relative positioning of content.
     * @param  ?StandardImageTextBlock  $block  The A+ Content standard image and text box block.
     */
    public function __construct(
        public readonly string $imagePositionType,
        public readonly ?StandardImageTextBlock $block = null,
    ) {
    }
}
