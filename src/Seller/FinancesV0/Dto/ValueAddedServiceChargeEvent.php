<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ValueAddedServiceChargeEvent extends BaseDto
{
    protected static array $attributeMap = [
        'transactionType' => 'TransactionType',
        'postedDate' => 'PostedDate',
        'description' => 'Description',
        'transactionAmount' => 'TransactionAmount',
    ];

    /**
     * @param  ?string  $transactionType Indicates the type of transaction.
     *
     * Example: 'Other Support Service fees'
     * @param  ?string  $postedDate
     * @param  ?string  $description A short description of the service charge event.
     * @param  ?Currency  $transactionAmount A currency type and amount.
     */
    public function __construct(
        public readonly ?string $transactionType = null,
        public readonly ?string $postedDate = null,
        public readonly ?string $description = null,
        public readonly ?Currency $transactionAmount = null,
    ) {
    }
}
