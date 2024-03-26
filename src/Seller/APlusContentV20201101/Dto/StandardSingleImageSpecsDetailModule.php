<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardSingleImageSpecsDetailModule extends BaseDto
{
    /**
     * @param  ?TextComponent  $headline  Rich text content.
     * @param  ?ImageComponent  $image  A reference to an image, hosted in the A+ Content media library.
     * @param  ?TextComponent  $descriptionHeadline  Rich text content.
     * @param  ?StandardTextBlock  $descriptionBlock1  The A+ Content standard text box block, comprised of a paragraph with a headline.
     * @param  ?StandardTextBlock  $descriptionBlock2  The A+ Content standard text box block, comprised of a paragraph with a headline.
     * @param  ?TextComponent  $specificationHeadline  Rich text content.
     * @param  ?StandardHeaderTextListBlock  $specificationListBlock  The A+ standard fixed-length list of text, with a related headline.
     * @param  ?StandardTextBlock  $specificationTextBlock  The A+ Content standard text box block, comprised of a paragraph with a headline.
     */
    public function __construct(
        public readonly ?TextComponent $headline = null,
        public readonly ?ImageComponent $image = null,
        public readonly ?TextComponent $descriptionHeadline = null,
        public readonly ?StandardTextBlock $descriptionBlock1 = null,
        public readonly ?StandardTextBlock $descriptionBlock2 = null,
        public readonly ?TextComponent $specificationHeadline = null,
        public readonly ?StandardHeaderTextListBlock $specificationListBlock = null,
        public readonly ?StandardTextBlock $specificationTextBlock = null,
    ) {
    }
}
