<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class BoxContentsFeeDetails extends BaseDto
{
    /**
     * @param  int  $totalUnits The item quantity.
     * @param  Amount  $feePerUnit The monetary value.
     * @param  Amount  $totalFee The monetary value.
     */
    public function __construct(
        public readonly int $totalUnits,
        public readonly Amount $feePerUnit,
        public readonly Amount $totalFee,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
