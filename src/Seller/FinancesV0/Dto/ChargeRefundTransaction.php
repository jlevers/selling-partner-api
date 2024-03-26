<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ChargeRefundTransaction extends BaseDto
{
    protected static array $attributeMap = ['chargeAmount' => 'ChargeAmount', 'chargeType' => 'ChargeType'];

    /**
     * @param  ?Currency  $chargeAmount  A currency type and amount.
     * @param  ?string  $chargeType  The type of charge.
     */
    public function __construct(
        public readonly ?Currency $chargeAmount = null,
        public readonly ?string $chargeType = null,
    ) {
    }
}
