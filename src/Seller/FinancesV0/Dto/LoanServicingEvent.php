<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class LoanServicingEvent extends Dto
{
    protected static array $attributeMap = [
        'loanAmount' => 'LoanAmount',
        'sourceBusinessEventType' => 'SourceBusinessEventType',
    ];

    /**
     * @param  ?Currency  $loanAmount  A currency type and amount.
     * @param  ?string  $sourceBusinessEventType  The type of event.
     *
     * Possible values:
     *
     * * LoanAdvance
     *
     * * LoanPayment
     *
     * * LoanRefund
     */
    public function __construct(
        public readonly ?Currency $loanAmount = null,
        public readonly ?string $sourceBusinessEventType = null,
    ) {
    }
}
