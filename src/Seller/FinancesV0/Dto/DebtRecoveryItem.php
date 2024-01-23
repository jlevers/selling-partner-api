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
     * @param  ?Currency  $recoveryAmount A currency type and amount.
     * @param  ?Currency  $originalAmount A currency type and amount.
     * @param  ?string  $groupBeginDate
     * @param  ?string  $groupEndDate
     */
    public function __construct(
        public readonly ?Currency $recoveryAmount = null,
        public readonly ?Currency $originalAmount = null,
        public readonly ?string $groupBeginDate = null,
        public readonly ?string $groupEndDate = null,
    ) {
    }
}
