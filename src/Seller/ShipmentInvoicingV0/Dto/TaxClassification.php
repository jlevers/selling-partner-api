<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxClassification extends BaseDto
{
    /**
     * @param  string  $name The type of tax.
     * @param  string  $value The entity's tax identifier.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $value,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
