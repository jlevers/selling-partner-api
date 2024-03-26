<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ProductAdsPaymentEvent extends BaseDto
{
    /**
     * @param  ?DateTime  $postedDate
     * @param  ?string  $transactionType  Indicates if the transaction is for a charge or a refund.
     *
     * Possible values:
     *
     * * charge - Charge
     *
     * * refund - Refund
     * @param  ?string  $invoiceId  Identifier for the invoice that the transaction appears in.
     * @param  ?Currency  $baseValue  A currency type and amount.
     * @param  ?Currency  $taxValue  A currency type and amount.
     * @param  ?Currency  $transactionValue  A currency type and amount.
     */
    public function __construct(
        public readonly ?\DateTime $postedDate = null,
        public readonly ?string $transactionType = null,
        public readonly ?string $invoiceId = null,
        public readonly ?Currency $baseValue = null,
        public readonly ?Currency $taxValue = null,
        public readonly ?Currency $transactionValue = null,
    ) {
    }
}
