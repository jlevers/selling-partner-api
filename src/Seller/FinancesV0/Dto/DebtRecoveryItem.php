<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DebtRecoveryItem extends BaseDto
{
    protected static array $attributeMap = [
        'recoveryAmount' => 'RecoveryAmount',
        'originalAmount' => 'OriginalAmount',
        'groupBeginDate' => 'GroupBeginDate',
        'groupEndDate' => 'GroupEndDate',
    ];

    /**
     * @param  ?Currency  $recoveryAmount  A currency type and amount.
     * @param  ?Currency  $originalAmount  A currency type and amount.
     * @param  ?DateTime  $groupBeginDate
     * @param  ?DateTime  $groupEndDate
     */
    public function __construct(
        public readonly ?Currency $recoveryAmount = null,
        public readonly ?Currency $originalAmount = null,
        public readonly ?\DateTime $groupBeginDate = null,
        public readonly ?\DateTime $groupEndDate = null,
    ) {
    }
}
