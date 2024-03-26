<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DirectPayment extends BaseDto
{
    protected static array $attributeMap = [
        'directPaymentType' => 'DirectPaymentType',
        'directPaymentAmount' => 'DirectPaymentAmount',
    ];

    /**
     * @param  ?string  $directPaymentType  The type of payment.
     *
     * Possible values:
     *
     * * StoredValueCardRevenue - The amount that is deducted from the seller's account because the seller received money through a stored value card.
     *
     * * StoredValueCardRefund - The amount that Amazon returns to the seller if the order that is bought using a stored value card is refunded.
     *
     * * PrivateLabelCreditCardRevenue - The amount that is deducted from the seller's account because the seller received money through a private label credit card offered by Amazon.
     *
     * * PrivateLabelCreditCardRefund - The amount that Amazon returns to the seller if the order that is bought using a private label credit card offered by Amazon is refunded.
     *
     * * CollectOnDeliveryRevenue - The COD amount that the seller collected directly from the buyer.
     *
     * * CollectOnDeliveryRefund - The amount that Amazon refunds to the buyer if an order paid for by COD is refunded.
     * @param  ?Currency  $directPaymentAmount  A currency type and amount.
     */
    public function __construct(
        public readonly ?string $directPaymentType = null,
        public readonly ?Currency $directPaymentAmount = null,
    ) {
    }
}
