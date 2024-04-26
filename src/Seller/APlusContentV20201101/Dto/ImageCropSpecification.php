<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class ImageCropSpecification extends Dto
{
    /**
     * @param  ImageDimensions  $size  The dimensions extending from the top left corner of the cropped image, or the top left corner of the original image if there is no cropping. Only `pixels` is allowed as the units value for ImageDimensions.
     * @param  ?ImageOffsets  $offset  The top left corner of the cropped image, specified in the original image's coordinate space.
     */
    public function __construct(
        public readonly ImageDimensions $size,
        public readonly ?ImageOffsets $offset = null,
    ) {
    }
}
