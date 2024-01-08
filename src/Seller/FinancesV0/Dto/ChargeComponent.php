<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ChargeComponent extends BaseDto
{
    /**
     * @param  ?string  $chargeType The type of charge.
     * @param  ?Currency  $chargeAmount A currency type and amount.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $chargeType = null,
        public readonly ?Currency $chargeAmount = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
