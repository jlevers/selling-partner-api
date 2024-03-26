<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartyIdentification extends BaseDto
{
    /**
     * @param  string  $partyId  Assigned identification for the party. For example, warehouse code or vendor code. Please refer to specific party for more details.
     */
    public function __construct(
        public readonly string $partyId,
    ) {
    }
}
