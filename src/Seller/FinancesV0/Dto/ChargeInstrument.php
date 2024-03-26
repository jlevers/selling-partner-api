<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ChargeInstrument extends BaseDto
{
    protected static array $attributeMap = ['description' => 'Description', 'tail' => 'Tail', 'amount' => 'Amount'];

    /**
     * @param  ?string  $description  A short description of the charge instrument.
     * @param  ?string  $tail  The account tail (trailing digits) of the charge instrument.
     * @param  ?Currency  $amount  A currency type and amount.
     */
    public function __construct(
        public readonly ?string $description = null,
        public readonly ?string $tail = null,
        public readonly ?Currency $amount = null,
    ) {
    }
}
