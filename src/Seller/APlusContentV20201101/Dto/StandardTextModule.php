<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardTextModule extends BaseDto
{
    /**
     * @param  ParagraphComponent  $body  A list of rich text content, usually presented in a text box.
     * @param  ?TextComponent  $headline  Rich text content.
     */
    public function __construct(
        public readonly ParagraphComponent $body,
        public readonly ?TextComponent $headline = null,
    ) {
    }
}
