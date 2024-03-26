<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LoanServicingEvent extends BaseDto
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
