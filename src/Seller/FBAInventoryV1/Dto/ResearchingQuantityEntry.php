<?php

namespace SellingPartnerApi\Seller\FBAInventoryV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ResearchingQuantityEntry extends BaseDto
{
    /**
     * @param  string  $name  The duration of the research.
     * @param  int  $quantity  The number of units.
     */
    public function __construct(
        public readonly string $name,
        public readonly int $quantity,
    ) {
    }
}
