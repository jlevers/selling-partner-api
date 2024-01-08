<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardImageTextCaptionBlock extends BaseDto
{
    /**
     * @param  ?StandardImageTextBlock  $block The A+ Content standard image and text box block.
     * @param  ?TextComponent  $caption Rich text content.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?StandardImageTextBlock $block = null,
        public readonly ?TextComponent $caption = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
