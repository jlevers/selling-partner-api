<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardTextBlock extends Dto
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
