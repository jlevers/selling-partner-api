<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Dimensions extends BaseDto
{
    /**
     * @param  ?Dimension  $height  Individual dimension value of an Amazon catalog item or item package.
     * @param  ?Dimension  $length  Individual dimension value of an Amazon catalog item or item package.
     * @param  ?Dimension  $weight  Individual dimension value of an Amazon catalog item or item package.
     * @param  ?Dimension  $width  Individual dimension value of an Amazon catalog item or item package.
     */
    public function __construct(
        public readonly ?Dimension $height = null,
        public readonly ?Dimension $length = null,
        public readonly ?Dimension $weight = null,
        public readonly ?Dimension $width = null,
    ) {
    }
}
