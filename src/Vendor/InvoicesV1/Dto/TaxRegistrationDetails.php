<?php

namespace SellingPartnerApi\Vendor\InvoicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxRegistrationDetails extends BaseDto
{
    /**
     * @param  string  $taxRegistrationType  The tax registration type for the entity.
     * @param  string  $taxRegistrationNumber  The tax registration number for the entity. For example, VAT ID, Consumption Tax ID.
     */
    public function __construct(
        public readonly string $taxRegistrationType,
        public readonly string $taxRegistrationNumber,
    ) {
    }
}
