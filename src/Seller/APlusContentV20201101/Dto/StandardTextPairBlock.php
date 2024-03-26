<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardTextPairBlock extends BaseDto
{
    /**
     * @param  ?TextComponent  $label  Rich text content.
     * @param  ?TextComponent  $description  Rich text content.
     */
    public function __construct(
        public readonly ?TextComponent $label = null,
        public readonly ?TextComponent $description = null,
    ) {
    }
}
