<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ChargeRefundEvent extends BaseDto
{
    protected static array $complexArrayTypes = ['chargeRefundTransactions' => [ChargeRefundTransaction::class]];

    /**
     * @param  ?string  $postedDate
     * @param  ?string  $reasonCode The reason given for a charge refund.
     *
     * Example: `SubscriptionFeeCorrection`
     * @param  ?string  $reasonCodeDescription A description of the Reason Code.
     *
     * Example: `SubscriptionFeeCorrection`
     * @param  ChargeRefundTransaction[]  $chargeRefundTransactions A list of `ChargeRefund` transactions.
     */
    public function __construct(
        public readonly ?string $postedDate = null,
        public readonly ?string $reasonCode = null,
        public readonly ?string $reasonCodeDescription = null,
        public readonly ?array $chargeRefundTransactions = null,
    ) {
    }
}
