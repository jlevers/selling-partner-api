<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartyIdentification extends BaseDto
{
    /**
     * @param  string  $partyId  Assigned identification for the party. For example, warehouse code or vendor code. Please refer to specific party for more details.
     * @param  ?Address  $address  Address of the party.
     * @param  ?TaxRegistrationDetails  $taxInfo  Tax registration details of the entity.
     */
    public function __construct(
        public readonly string $partyId,
        public readonly ?Address $address = null,
        public readonly ?TaxRegistrationDetails $taxInfo = null,
    ) {
    }
}
