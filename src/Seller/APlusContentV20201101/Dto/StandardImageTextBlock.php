<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardImageTextBlock extends BaseDto
{
    /**
     * @param  ?ImageComponent  $image  A reference to an image, hosted in the A+ Content media library.
     * @param  ?TextComponent  $headline  Rich text content.
     * @param  ?ParagraphComponent  $body  A list of rich text content, usually presented in a text box.
     */
    public function __construct(
        public readonly ?ImageComponent $image = null,
        public readonly ?TextComponent $headline = null,
        public readonly ?ParagraphComponent $body = null,
    ) {
    }
}
