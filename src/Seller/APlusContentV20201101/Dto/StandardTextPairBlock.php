<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardTextPairBlock extends Dto
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
