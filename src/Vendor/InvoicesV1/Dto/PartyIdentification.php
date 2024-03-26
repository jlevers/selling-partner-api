<?php

namespace SellingPartnerApi\Vendor\InvoicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartyIdentification extends BaseDto
{
    protected static array $complexArrayTypes = ['taxRegistrationDetails' => [TaxRegistrationDetails::class]];

    /**
     * @param  string  $partyId  Assigned identification for the party.
     * @param  ?Address  $address  A physical address.
     * @param  TaxRegistrationDetails[]  $taxRegistrationDetails  Tax registration details of the party.
     */
    public function __construct(
        public readonly string $partyId,
        public readonly ?Address $address = null,
        public readonly ?array $taxRegistrationDetails = null,
    ) {
    }
}
