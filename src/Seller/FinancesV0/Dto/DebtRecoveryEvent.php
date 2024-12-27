<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class DebtRecoveryEvent extends Dto
{
    protected static array $attributeMap = [
        'debtRecoveryType' => 'DebtRecoveryType',
        'recoveryAmount' => 'RecoveryAmount',
        'overPaymentCredit' => 'OverPaymentCredit',
        'debtRecoveryItemList' => 'DebtRecoveryItemList',
        'chargeInstrumentList' => 'ChargeInstrumentList',
    ];

    protected static array $complexArrayTypes = [
        'debtRecoveryItemList' => DebtRecoveryItem::class,
        'chargeInstrumentList' => ChargeInstrument::class,
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
     * * DebtAdjustment
     * @param  ?Currency  $recoveryAmount  A currency type and amount.
     * @param  ?Currency  $overPaymentCredit  A currency type and amount.
     * @param  DebtRecoveryItem[]|null  $debtRecoveryItemList  A list of debt recovery item information.
     * @param  ChargeInstrument[]|null  $chargeInstrumentList  A list of payment instruments.
     */
    public function __construct(
        public ?string $debtRecoveryType = null,
        public ?Currency $recoveryAmount = null,
        public ?Currency $overPaymentCredit = null,
        public ?array $debtRecoveryItemList = null,
        public ?array $chargeInstrumentList = null,
    ) {}
}
