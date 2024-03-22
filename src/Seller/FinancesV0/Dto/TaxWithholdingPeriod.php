<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxWithholdingPeriod extends BaseDto
{
    protected static array $attributeMap = ['startDate' => 'StartDate', 'endDate' => 'EndDate'];

    /**
     * @param  ?DateTime  $startDate
     * @param  ?DateTime  $endDate
     */
    public function __construct(
        public readonly ?\DateTime $startDate = null,
        public readonly ?\DateTime $endDate = null,
    ) {
    }
}
