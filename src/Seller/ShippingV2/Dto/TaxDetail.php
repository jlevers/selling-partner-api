<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxDetail extends BaseDto
{
    /**
     * @param  string  $taxRegistrationNumber The shipper's tax registration number associated with the shipment for customs compliance purposes in certain regions.
     * @param  string  $taxType Indicates the type of tax.
     */
    public function __construct(
        public readonly string $taxRegistrationNumber,
        public readonly ?string $taxType = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
