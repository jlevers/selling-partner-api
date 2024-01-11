<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class BoxContentsFeeDetails extends BaseDto
{
    /**
     * @param  ?int  $totalUnits The item quantity.
     * @param  ?Amount  $feePerUnit The monetary value.
     * @param  ?Amount  $totalFee The monetary value.
     */
    public function __construct(
        public readonly ?int $totalUnits = null,
        public readonly ?Amount $feePerUnit = null,
        public readonly ?Amount $totalFee = null,
    ) {
    }
}
