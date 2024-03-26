<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardHeaderTextListBlock extends BaseDto
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
