<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxWithholdingEvent extends BaseDto
{
    protected static array $attributeMap = [
        'postedDate' => 'PostedDate',
        'baseAmount' => 'BaseAmount',
        'withheldAmount' => 'WithheldAmount',
        'taxWithholdingPeriod' => 'TaxWithholdingPeriod',
    ];

    /**
     * @param  ?string  $postedDate
     * @param  ?Currency  $baseAmount A currency type and amount.
     * @param  ?Currency  $withheldAmount A currency type and amount.
     * @param  ?TaxWithholdingPeriod  $taxWithholdingPeriod Period which taxwithholding on seller's account is calculated.
     */
    public function __construct(
        public readonly ?string $postedDate = null,
        public readonly ?Currency $baseAmount = null,
        public readonly ?Currency $withheldAmount = null,
        public readonly ?TaxWithholdingPeriod $taxWithholdingPeriod = null,
    ) {
    }
}
