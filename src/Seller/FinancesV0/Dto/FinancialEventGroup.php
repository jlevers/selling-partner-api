<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FinancialEventGroup extends BaseDto
{
    protected static array $attributeMap = [
        'financialEventGroupId' => 'FinancialEventGroupId',
        'processingStatus' => 'ProcessingStatus',
        'fundTransferStatus' => 'FundTransferStatus',
        'originalTotal' => 'OriginalTotal',
        'convertedTotal' => 'ConvertedTotal',
        'fundTransferDate' => 'FundTransferDate',
        'traceId' => 'TraceId',
        'accountTail' => 'AccountTail',
        'beginningBalance' => 'BeginningBalance',
        'financialEventGroupStart' => 'FinancialEventGroupStart',
        'financialEventGroupEnd' => 'FinancialEventGroupEnd',
    ];

    /**
     * @param  ?string  $financialEventGroupId  A unique identifier for the financial event group.
     * @param  ?string  $processingStatus  The processing status of the financial event group indicates whether the balance of the financial event group is settled.
     *
     * Possible values:
     *
     * * Open
     *
     * * Closed
     * @param  ?string  $fundTransferStatus  The status of the fund transfer.
     * @param  ?Currency  $originalTotal  A currency type and amount.
     * @param  ?Currency  $convertedTotal  A currency type and amount.
     * @param  ?DateTime  $fundTransferDate
     * @param  ?string  $traceId  The trace identifier used by sellers to look up transactions externally.
     * @param  ?string  $accountTail  The account tail of the payment instrument.
     * @param  ?Currency  $beginningBalance  A currency type and amount.
     * @param  ?DateTime  $financialEventGroupStart
     * @param  ?DateTime  $financialEventGroupEnd
     */
    public function __construct(
        public readonly ?string $financialEventGroupId = null,
        public readonly ?string $processingStatus = null,
        public readonly ?string $fundTransferStatus = null,
        public readonly ?Currency $originalTotal = null,
        public readonly ?Currency $convertedTotal = null,
        public readonly ?\DateTime $fundTransferDate = null,
        public readonly ?string $traceId = null,
        public readonly ?string $accountTail = null,
        public readonly ?Currency $beginningBalance = null,
        public readonly ?\DateTime $financialEventGroupStart = null,
        public readonly ?\DateTime $financialEventGroupEnd = null,
    ) {
    }
}
