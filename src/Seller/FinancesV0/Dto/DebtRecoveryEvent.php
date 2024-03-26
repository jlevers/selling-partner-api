<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DebtRecoveryEvent extends BaseDto
{
    protected static array $attributeMap = [
        'debtRecoveryType' => 'DebtRecoveryType',
        'recoveryAmount' => 'RecoveryAmount',
        'overPaymentCredit' => 'OverPaymentCredit',
        'debtRecoveryItemList' => 'DebtRecoveryItemList',
        'chargeInstrumentList' => 'ChargeInstrumentList',
    ];

    protected static array $complexArrayTypes = [
        'debtRecoveryItemList' => [DebtRecoveryItem::class],
        'chargeInstrumentList' => [ChargeInstrument::class],
    ];

    /**
     * @param  ?string  $debtRecoveryType  The debt recovery type.
     *
     * Possible values:
     *
     * * DebtPayment
     *
     * * DebtPaymentFailure
     *
     * *DebtAdjustment
     * @param  ?Currency  $recoveryAmount  A currency type and amount.
     * @param  ?Currency  $overPaymentCredit  A currency type and amount.
     * @param  DebtRecoveryItem[]|null  $debtRecoveryItemList  A list of debt recovery item information.
     * @param  ChargeInstrument[]|null  $chargeInstrumentList  A list of payment instruments.
     */
    public function __construct(
        public readonly ?string $debtRecoveryType = null,
        public readonly ?Currency $recoveryAmount = null,
        public readonly ?Currency $overPaymentCredit = null,
        public readonly ?array $debtRecoveryItemList = null,
        public readonly ?array $chargeInstrumentList = null,
    ) {
    }
}
