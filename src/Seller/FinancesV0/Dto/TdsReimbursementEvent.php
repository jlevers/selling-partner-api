<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TdsReimbursementEvent extends BaseDto
{
    /**
     * @param  ?string  $postedDate
     * @param  ?string  $tdsOrderId The Tax-Deducted-at-Source (TDS) identifier.
     * @param  ?Currency  $reimbursedAmount A currency type and amount.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $postedDate = null,
        public readonly ?string $tdsOrderId = null,
        public readonly ?Currency $reimbursedAmount = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
