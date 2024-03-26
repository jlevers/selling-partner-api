<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardSingleImageHighlightsModule extends BaseDto
{
    /**
     * @param  ?ImageComponent  $image  A reference to an image, hosted in the A+ Content media library.
     * @param  ?TextComponent  $headline  Rich text content.
     * @param  ?StandardTextBlock  $textBlock1  The A+ Content standard text box block, comprised of a paragraph with a headline.
     * @param  ?StandardTextBlock  $textBlock2  The A+ Content standard text box block, comprised of a paragraph with a headline.
     * @param  ?StandardTextBlock  $textBlock3  The A+ Content standard text box block, comprised of a paragraph with a headline.
     * @param  ?StandardHeaderTextListBlock  $bulletedListBlock  The A+ standard fixed-length list of text, with a related headline.
     */
    public function __construct(
        public readonly ?ImageComponent $image = null,
        public readonly ?TextComponent $headline = null,
        public readonly ?StandardTextBlock $textBlock1 = null,
        public readonly ?StandardTextBlock $textBlock2 = null,
        public readonly ?StandardTextBlock $textBlock3 = null,
        public readonly ?StandardHeaderTextListBlock $bulletedListBlock = null,
    ) {
    }
}
