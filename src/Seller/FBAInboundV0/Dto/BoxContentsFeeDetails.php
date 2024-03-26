<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class BoxContentsFeeDetails extends BaseDto
{
    protected static array $attributeMap = [
        'totalUnits' => 'TotalUnits',
        'feePerUnit' => 'FeePerUnit',
        'totalFee' => 'TotalFee',
    ];

    /**
     * @param  ?int  $totalUnits  The item quantity.
     * @param  ?Amount  $feePerUnit  The monetary value.
     * @param  ?Amount  $totalFee  The monetary value.
     */
    public function __construct(
        public readonly ?int $totalUnits = null,
        public readonly ?Amount $feePerUnit = null,
        public readonly ?Amount $totalFee = null,
    ) {
    }
}
