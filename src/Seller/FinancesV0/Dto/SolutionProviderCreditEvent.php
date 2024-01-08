<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SolutionProviderCreditEvent extends BaseDto
{
    /**
     * @param  ?string  $providerTransactionType The transaction type.
     * @param  ?string  $sellerOrderId A seller-defined identifier for an order.
     * @param  ?string  $marketplaceId The identifier of the marketplace where the order was placed.
     * @param  ?string  $marketplaceCountryCode The two-letter country code of the country associated with the marketplace where the order was placed.
     * @param  ?string  $sellerId The Amazon-defined identifier of the seller.
     * @param  ?string  $sellerStoreName The store name where the payment event occurred.
     * @param  ?string  $providerId The Amazon-defined identifier of the solution provider.
     * @param  ?string  $providerStoreName The store name where the payment event occurred.
     * @param  ?Currency  $transactionAmount A currency type and amount.
     * @param  ?string  $transactionCreationDate
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $providerTransactionType = null,
        public readonly ?string $sellerOrderId = null,
        public readonly ?string $marketplaceId = null,
        public readonly ?string $marketplaceCountryCode = null,
        public readonly ?string $sellerId = null,
        public readonly ?string $sellerStoreName = null,
        public readonly ?string $providerId = null,
        public readonly ?string $providerStoreName = null,
        public readonly ?Currency $transactionAmount = null,
        public readonly ?string $transactionCreationDate = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
