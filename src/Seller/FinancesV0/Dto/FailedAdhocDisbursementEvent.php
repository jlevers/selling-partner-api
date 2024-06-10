<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class FailedAdhocDisbursementEvent extends Dto
{
    protected static array $attributeMap = [
        'fundsTransfersType' => 'FundsTransfersType',
        'transferId' => 'TransferId',
        'disbursementId' => 'DisbursementId',
        'paymentDisbursementType' => 'PaymentDisbursementType',
        'status' => 'Status',
        'transferAmount' => 'TransferAmount',
        'postedDate' => 'PostedDate',
    ];

    /**
     * @param  ?string  $fundsTransfersType  The type of fund transfer.
     *
     * Example "Refund"
     * @param  ?string  $transferId  The transfer identifier.
     * @param  ?string  $disbursementId  The disbursement identifier.
     * @param  ?string  $paymentDisbursementType  The type of payment for disbursement.
     *
     * Example `CREDIT_CARD`
     * @param  ?string  $status  The status of the failed `AdhocDisbursement`.
     *
     * Example `HARD_DECLINED`
     * @param  ?Currency  $transferAmount  A currency type and amount.
     * @param  ?\DateTimeInterface  $postedDate
     */
    public function __construct(
        public readonly ?string $fundsTransfersType = null,
        public readonly ?string $transferId = null,
        public readonly ?string $disbursementId = null,
        public readonly ?string $paymentDisbursementType = null,
        public readonly ?string $status = null,
        public readonly ?Currency $transferAmount = null,
        public readonly ?\DateTimeInterface $postedDate = null,
    ) {
    }
}
