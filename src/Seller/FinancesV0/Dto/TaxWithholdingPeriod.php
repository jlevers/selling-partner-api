<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxWithholdingPeriod extends BaseDto
{
    /**
     * @param  ?string  $startDate
     * @param  ?string  $endDate
     */
    public function __construct(
        public readonly ?string $startDate = null,
        public readonly ?string $endDate = null,
    ) {
    }
}
