<?php

namespace SellingPartnerApi\Vendor\InvoicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ChargeDetails extends BaseDto
{
    protected static array $complexArrayTypes = ['taxDetails' => [TaxDetails::class]];

    /**
     * @param  string  $type Type of the charge applied.
     * @param  string  $description Description of the charge.
     * @param  Money  $chargeAmount An amount of money, including units in the form of currency.
     * @param  TaxDetails[]  $taxDetails Tax amount details applied on this charge.
     */
    public function __construct(
        public readonly string $type,
        public readonly ?string $description = null,
        public readonly ?Money $chargeAmount = null,
        public readonly ?array $taxDetails = null,
    ) {
    }
}
