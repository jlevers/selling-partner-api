<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardImageTextCaptionBlock extends Dto
{
    /**
     * @param  ?StandardImageTextBlock  $block  The A+ Content standard image and text box block.
     * @param  ?TextComponent  $caption  Rich text content.
     */
    public function __construct(
        public ?StandardImageTextBlock $block = null,
        public ?TextComponent $caption = null,
    ) {}
}
