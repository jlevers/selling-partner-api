<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardTextBlock extends BaseDto
{
    /**
     * @param  ?TextComponent  $headline  Rich text content.
     * @param  ?ParagraphComponent  $body  A list of rich text content, usually presented in a text box.
     */
    public function __construct(
        public readonly ?TextComponent $headline = null,
        public readonly ?ParagraphComponent $body = null,
    ) {
    }
}
