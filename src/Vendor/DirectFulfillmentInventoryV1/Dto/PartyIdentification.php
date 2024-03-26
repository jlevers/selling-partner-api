<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartyIdentification extends BaseDto
{
    /**
     * @param  string  $partyId  Assigned identification for the party.
     */
    public function __construct(
        public readonly string $partyId,
    ) {
    }
}
