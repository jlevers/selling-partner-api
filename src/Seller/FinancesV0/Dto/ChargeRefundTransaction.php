<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ChargeRefundTransaction extends BaseDto
{
    /**
     * @param  ?Currency  $chargeAmount A currency type and amount.
     * @param  ?string  $chargeType The type of charge.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?Currency $chargeAmount = null,
        public readonly ?string $chargeType = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
