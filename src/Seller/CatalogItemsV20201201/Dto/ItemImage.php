<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemImage extends BaseDto
{
    /**
     * @param  string  $variant  Variant of the image, such as MAIN or PT01.
     * @param  string  $link  Link, or URL, for the image.
     * @param  int  $height  Height of the image in pixels.
     * @param  int  $width  Width of the image in pixels.
     */
    public function __construct(
        public readonly string $variant,
        public readonly string $link,
        public readonly int $height,
        public readonly int $width,
    ) {
    }
}
