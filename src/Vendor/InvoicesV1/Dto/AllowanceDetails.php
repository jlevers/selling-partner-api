<?php

namespace SellingPartnerApi\Vendor\InvoicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AllowanceDetails extends BaseDto
{
    protected static array $complexArrayTypes = ['taxDetails' => [TaxDetails::class]];

    /**
     * @param  string  $type Type of the allowance applied.
     * @param  string  $description Description of the allowance.
     * @param  Money  $allowanceAmount An amount of money, including units in the form of currency.
     * @param  TaxDetails[]  $taxDetails Tax amount details applied on this allowance.
     */
    public function __construct(
        public readonly string $type,
        public readonly ?string $description = null,
        public readonly ?Money $allowanceAmount = null,
        public readonly ?array $taxDetails = null,
    ) {
    }
}
