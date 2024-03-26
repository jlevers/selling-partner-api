<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TdsReimbursementEvent extends BaseDto
{
    protected static array $attributeMap = [
        'postedDate' => 'PostedDate',
        'tdsOrderId' => 'TDSOrderId',
        'reimbursedAmount' => 'ReimbursedAmount',
    ];

    /**
     * @param  ?DateTime  $postedDate
     * @param  ?string  $tdsOrderId  The Tax-Deducted-at-Source (TDS) identifier.
     * @param  ?Currency  $reimbursedAmount  A currency type and amount.
     */
    public function __construct(
        public readonly ?\DateTime $postedDate = null,
        public readonly ?string $tdsOrderId = null,
        public readonly ?Currency $reimbursedAmount = null,
    ) {
    }
}
