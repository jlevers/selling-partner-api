<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxRegistrationDetail extends BaseDto
{
    /**
     * @param  string  $taxRegistrationNumber  Tax registration number for the entity. For example, VAT ID, Consumption Tax ID.
     * @param  ?string  $taxRegistrationType  Tax registration type for the entity.
     * @param  ?Address  $taxRegistrationAddress  Address of the party.
     * @param  ?string  $taxRegistrationMessage  Tax registration message that can be used for additional tax related details.
     */
    public function __construct(
        public readonly string $taxRegistrationNumber,
        public readonly ?string $taxRegistrationType = null,
        public readonly ?Address $taxRegistrationAddress = null,
        public readonly ?string $taxRegistrationMessage = null,
    ) {
    }
}
