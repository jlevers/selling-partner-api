<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderScenarioRequest extends BaseDto
{
    /**
     * @param  PartyIdentification  $sellingParty  The identification object for the party information. For example, warehouse code or vendor code. Please refer to specific party for more details.
     * @param  PartyIdentification  $shipFromParty  The identification object for the party information. For example, warehouse code or vendor code. Please refer to specific party for more details.
     */
    public function __construct(
        public readonly PartyIdentification $sellingParty,
        public readonly PartyIdentification $shipFromParty,
    ) {
    }
}
