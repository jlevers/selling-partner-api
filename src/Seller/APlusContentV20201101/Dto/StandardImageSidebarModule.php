<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardImageSidebarModule extends BaseDto
{
    /**
     * @param  ?TextComponent  $headline  Rich text content.
     * @param  ?StandardImageCaptionBlock  $imageCaptionBlock  The A+ Content standard image and caption block.
     * @param  ?StandardTextBlock  $descriptionTextBlock  The A+ Content standard text box block, comprised of a paragraph with a headline.
     * @param  ?StandardTextListBlock  $descriptionListBlock  The A+ Content standard fixed length list of text, usually presented as bullet points.
     * @param  ?StandardImageTextBlock  $sidebarImageTextBlock  The A+ Content standard image and text box block.
     * @param  ?StandardTextListBlock  $sidebarListBlock  The A+ Content standard fixed length list of text, usually presented as bullet points.
     */
    public function __construct(
        public readonly ?TextComponent $headline = null,
        public readonly ?StandardImageCaptionBlock $imageCaptionBlock = null,
        public readonly ?StandardTextBlock $descriptionTextBlock = null,
        public readonly ?StandardTextListBlock $descriptionListBlock = null,
        public readonly ?StandardImageTextBlock $sidebarImageTextBlock = null,
        public readonly ?StandardTextListBlock $sidebarListBlock = null,
    ) {
    }
}
