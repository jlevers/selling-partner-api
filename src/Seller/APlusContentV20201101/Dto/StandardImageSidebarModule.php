<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardImageSidebarModule extends Dto
{
    /**
     * @param  ?TextComponent  $headline  Rich text content.
     * @param  ?StandardImageCaptionBlock  $imageCaptionBlock  The A+ Content standard image and caption block.
     * @param  ?StandardTextBlock  $descriptionTextBlock  The A+ Content standard text box block, which contains a paragraph and a headline.
     * @param  ?StandardTextListBlock  $descriptionListBlock  The A+ Content standard fixed-length list of text, usually presented as bullet points.
     * @param  ?StandardImageTextBlock  $sidebarImageTextBlock  The A+ Content standard image and text box block.
     * @param  ?StandardTextListBlock  $sidebarListBlock  The A+ Content standard fixed-length list of text, usually presented as bullet points.
     */
    public function __construct(
        public ?TextComponent $headline = null,
        public ?StandardImageCaptionBlock $imageCaptionBlock = null,
        public ?StandardTextBlock $descriptionTextBlock = null,
        public ?StandardTextListBlock $descriptionListBlock = null,
        public ?StandardImageTextBlock $sidebarImageTextBlock = null,
        public ?StandardTextListBlock $sidebarListBlock = null,
    ) {}
}
