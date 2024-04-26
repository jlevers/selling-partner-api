<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\InvoicesV1\Dto;

use SellingPartnerApi\Dto;

final class ChargeDetails extends Dto
{
    protected static array $complexArrayTypes = ['taxDetails' => [TaxDetails::class]];

    /**
     * @param  string  $type  Type of the charge applied.
     * @param  Money  $chargeAmount  An amount of money, including units in the form of currency.
     * @param  ?string  $description  Description of the charge.
     * @param  TaxDetails[]  $taxDetails  Total tax amount details for all line items.
     */
    public function __construct(
        public readonly string $type,
        public readonly Money $chargeAmount,
        public readonly ?string $description = null,
        public readonly ?array $taxDetails = null,
    ) {
    }
}
