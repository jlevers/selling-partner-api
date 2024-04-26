<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use SellingPartnerApi\Dto;

final class CreateShippingLabelsRequest extends Dto
{
    protected static array $complexArrayTypes = ['containers' => [Container::class]];

    /**
     * @param  Container[]  $containers  A list of the packages in this shipment.
     */
    public function __construct(
        public readonly PartyIdentification $sellingParty,
        public readonly PartyIdentification $shipFromParty,
        public readonly ?array $containers = null,
    ) {
    }
}
