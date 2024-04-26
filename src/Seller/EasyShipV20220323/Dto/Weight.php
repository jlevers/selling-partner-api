<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use SellingPartnerApi\Dto;

final class Weight extends Dto
{
    /**
     * @param  ?float  $value  The weight of the package.
     * @param  ?string  $unit  The unit of measurement used to measure the weight.
     */
    public function __construct(
        public readonly ?float $value = null,
        public readonly ?string $unit = null,
    ) {
    }
}
