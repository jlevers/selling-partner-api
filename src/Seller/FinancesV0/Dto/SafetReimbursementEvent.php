<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class SafetReimbursementEvent extends Dto
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
     * @param  ?\DateTimeInterface  $postedDate
     * @param  ?string  $safetClaimId  A SAFE-T claim identifier.
     * @param  ?Currency  $reimbursedAmount  A currency type and amount.
     * @param  ?string  $reasonCode  Indicates why the seller was reimbursed.
     * @param  SafetReimbursementItem[]|null  $safetReimbursementItemList  A list of SAFETReimbursementItems.
     */
    public function __construct(
        public readonly ?\DateTimeInterface $postedDate = null,
        public readonly ?string $safetClaimId = null,
        public readonly ?Currency $reimbursedAmount = null,
        public readonly ?string $reasonCode = null,
        public readonly ?array $safetReimbursementItemList = null,
    ) {
    }
}
