<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardImageCaptionBlock extends BaseDto
{
    /**
     * @param  ?ImageComponent  $image  A reference to an image, hosted in the A+ Content media library.
     * @param  ?TextComponent  $caption  Rich text content.
     */
    public function __construct(
        public readonly ?ImageComponent $image = null,
        public readonly ?TextComponent $caption = null,
    ) {
    }
}
