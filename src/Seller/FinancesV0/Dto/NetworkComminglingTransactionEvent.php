<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class NetworkComminglingTransactionEvent extends BaseDto
{
    protected static array $attributeMap = [
        'transactionType' => 'TransactionType',
        'postedDate' => 'PostedDate',
        'netCoTransactionId' => 'NetCoTransactionID',
        'swapReason' => 'SwapReason',
        'asin' => 'ASIN',
        'marketplaceId' => 'MarketplaceId',
        'taxExclusiveAmount' => 'TaxExclusiveAmount',
        'taxAmount' => 'TaxAmount',
    ];

    /**
     * @param  ?string  $transactionType  The type of network item swap.
     *
     * Possible values:
     *
     * * NetCo - A Fulfillment by Amazon inventory pooling transaction. Available only in the India marketplace.
     *
     * * ComminglingVAT - A commingling VAT transaction. Available only in the UK, Spain, France, Germany, and Italy marketplaces.
     * @param  ?DateTime  $postedDate
     * @param  ?string  $netCoTransactionId  The identifier for the network item swap.
     * @param  ?string  $swapReason  The reason for the network item swap.
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the swapped item.
     * @param  ?string  $marketplaceId  The marketplace in which the event took place.
     * @param  ?Currency  $taxExclusiveAmount  A currency type and amount.
     * @param  ?Currency  $taxAmount  A currency type and amount.
     */
    public function __construct(
        public readonly ?string $transactionType = null,
        public readonly ?\DateTime $postedDate = null,
        public readonly ?string $netCoTransactionId = null,
        public readonly ?string $swapReason = null,
        public readonly ?string $asin = null,
        public readonly ?string $marketplaceId = null,
        public readonly ?Currency $taxExclusiveAmount = null,
        public readonly ?Currency $taxAmount = null,
    ) {
    }
}
