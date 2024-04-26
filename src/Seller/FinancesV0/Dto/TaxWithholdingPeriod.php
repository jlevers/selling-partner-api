<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class TaxWithholdingPeriod extends Dto
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
