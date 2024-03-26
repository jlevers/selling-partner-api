<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxRegistrationDetails extends BaseDto
{
    /**
     * @param  string  $taxRegistrationType  Tax registration type for the entity.
     * @param  string  $taxRegistrationNumber  Tax registration number for the entity. For example, VAT ID.
     */
    public function __construct(
        public readonly string $taxRegistrationType,
        public readonly string $taxRegistrationNumber,
    ) {
    }
}
