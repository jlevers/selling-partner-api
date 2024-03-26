<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TextItem extends BaseDto
{
    /**
     * @param  int  $position  The rank or index of this text item within the collection. Different items cannot occupy the same position within a single collection.
     * @param  TextComponent  $text  Rich text content.
     */
    public function __construct(
        public readonly int $position,
        public readonly TextComponent $text,
    ) {
    }
}
