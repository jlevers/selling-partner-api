<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class WindowInput extends Dto
{
    /**
     * @param  DateTime  $start  The start date of the window. The time component must be zero.
     */
    public function __construct(
        public readonly \DateTime $start,
    ) {
    }
}
