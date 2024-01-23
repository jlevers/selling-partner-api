<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AdhocDisbursementEvent extends BaseDto
{
    protected static array $attributeMap = [
        'transactionType' => 'TransactionType',
        'postedDate' => 'PostedDate',
        'transactionId' => 'TransactionId',
        'transactionAmount' => 'TransactionAmount',
    ];

    /**
     * @param  ?string  $transactionType Indicates the type of transaction.
     *
     * Example: "Disbursed to Amazon Gift Card balance"
     * @param  ?string  $postedDate
     * @param  ?string  $transactionId The identifier for the transaction.
     * @param  ?Currency  $transactionAmount A currency type and amount.
     */
    public function __construct(
        public readonly ?string $transactionType = null,
        public readonly ?string $postedDate = null,
        public readonly ?string $transactionId = null,
        public readonly ?Currency $transactionAmount = null,
    ) {
    }
}
