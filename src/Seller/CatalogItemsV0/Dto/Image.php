<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Image extends BaseDto
{
    protected static array $attributeMap = ['url' => 'URL', 'height' => 'Height', 'width' => 'Width'];

    /**
     * @param  ?string  $url  The image URL attribute of the item.
     * @param  ?DecimalWithUnits  $height  The decimal value and unit.
     * @param  ?DecimalWithUnits  $width  The decimal value and unit.
     */
    public function __construct(
        public readonly ?string $url = null,
        public readonly ?DecimalWithUnits $height = null,
        public readonly ?DecimalWithUnits $width = null,
    ) {
    }
}
