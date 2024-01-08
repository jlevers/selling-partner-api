<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FinancialEventGroup extends BaseDto
{
    /**
     * @param  ?string  $financialEventGroupId A unique identifier for the financial event group.
     * @param  ?string  $processingStatus The processing status of the financial event group indicates whether the balance of the financial event group is settled.
     *
     * Possible values:
     *
     * * Open
     *
     * * Closed
     * @param  ?string  $fundTransferStatus The status of the fund transfer.
     * @param  ?Currency  $originalTotal A currency type and amount.
     * @param  ?Currency  $convertedTotal A currency type and amount.
     * @param  ?string  $fundTransferDate
     * @param  ?string  $traceId The trace identifier used by sellers to look up transactions externally.
     * @param  ?string  $accountTail The account tail of the payment instrument.
     * @param  ?Currency  $beginningBalance A currency type and amount.
     * @param  ?string  $financialEventGroupStart
     * @param  ?string  $financialEventGroupEnd
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $financialEventGroupId = null,
        public readonly ?string $processingStatus = null,
        public readonly ?string $fundTransferStatus = null,
        public readonly ?Currency $originalTotal = null,
        public readonly ?Currency $convertedTotal = null,
        public readonly ?string $fundTransferDate = null,
        public readonly ?string $traceId = null,
        public readonly ?string $accountTail = null,
        public readonly ?Currency $beginningBalance = null,
        public readonly ?string $financialEventGroupStart = null,
        public readonly ?string $financialEventGroupEnd = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
