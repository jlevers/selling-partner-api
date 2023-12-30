<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateShippingLabelsRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['containers' => [Container::class]];

    /**
     * @param  Container[]  $containers A list of the packages in this shipment.
     */
    public function __construct(
        public readonly ?PartyIdentification $sellingParty = null,
        public readonly ?PartyIdentification $shipFromParty = null,
        public readonly ?array $containers = null,
    ) {
    }
}
