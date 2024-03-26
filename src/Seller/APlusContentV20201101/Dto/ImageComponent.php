<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ImageComponent extends BaseDto
{
    /**
     * @param  string  $uploadDestinationId  This identifier is provided by the Selling Partner API for Uploads.
     * @param  ImageCropSpecification  $imageCropSpecification  The instructions for optionally cropping an image. If no cropping is desired, set the dimensions to the original image size. If the image is cropped and no offset values are provided, then the coordinates of the top left corner of the cropped image, relative to the original image, are defaulted to (0,0).
     * @param  string  $altText  The alternative text for the image.
     */
    public function __construct(
        public readonly string $uploadDestinationId,
        public readonly ImageCropSpecification $imageCropSpecification,
        public readonly string $altText,
    ) {
    }
}
