<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SafetReimbursementEvent extends BaseDto
{
    protected static array $attributeMap = [
        'postedDate' => 'PostedDate',
        'safetClaimId' => 'SAFETClaimId',
        'reimbursedAmount' => 'ReimbursedAmount',
        'reasonCode' => 'ReasonCode',
        'safetReimbursementItemList' => 'SAFETReimbursementItemList',
    ];

    protected static array $complexArrayTypes = ['safetReimbursementItemList' => [SafetReimbursementItem::class]];

    /**
     * @param  ?DateTime  $postedDate
     * @param  ?string  $safetClaimId  A SAFE-T claim identifier.
     * @param  ?Currency  $reimbursedAmount  A currency type and amount.
     * @param  ?string  $reasonCode  Indicates why the seller was reimbursed.
     * @param  SafetReimbursementItem[]|null  $safetReimbursementItemList  A list of SAFETReimbursementItems.
     */
    public function __construct(
        public readonly ?\DateTime $postedDate = null,
        public readonly ?string $safetClaimId = null,
        public readonly ?Currency $reimbursedAmount = null,
        public readonly ?string $reasonCode = null,
        public readonly ?array $safetReimbursementItemList = null,
    ) {
    }
}
