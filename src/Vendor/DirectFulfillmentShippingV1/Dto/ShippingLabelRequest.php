<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShippingLabelRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['containers' => [Container::class]];

    /**
     * @param  string  $purchaseOrderNumber  Purchase order number of the order for which to create a shipping label.
     * @param  Container[]  $containers  A list of the packages in this shipment.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly PartyIdentification $sellingParty,
        public readonly PartyIdentification $shipFromParty,
        public readonly ?array $containers = null,
    ) {
    }
}
