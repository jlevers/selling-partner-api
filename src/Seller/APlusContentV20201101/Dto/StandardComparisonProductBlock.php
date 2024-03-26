<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardComparisonProductBlock extends BaseDto
{
    protected static array $complexArrayTypes = ['metrics' => [PlainTextItem::class]];

    /**
     * @param  int  $position  The rank or index of this comparison product block within the module. Different blocks cannot occupy the same position within a single module.
     * @param  ?ImageComponent  $image  A reference to an image, hosted in the A+ Content media library.
     * @param  ?string  $title  The comparison product title.
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN).
     * @param  ?bool  $highlight  Determines whether this block of content is visually highlighted.
     * @param  PlainTextItem[]|null  $metrics  Comparison metrics for the product.
     */
    public function __construct(
        public readonly int $position,
        public readonly ?ImageComponent $image = null,
        public readonly ?string $title = null,
        public readonly ?string $asin = null,
        public readonly ?bool $highlight = null,
        public readonly ?array $metrics = null,
    ) {
    }
}
