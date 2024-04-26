<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class Weight extends Dto
{
    /**
     * @param  string  $unit  The unit of weight.
     * @param  string  $value  The weight value.
     */
    public function __construct(
        public readonly string $unit,
        public readonly string $value,
    ) {
    }
}
