<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentConfirmation extends BaseDto
{
    protected static array $complexArrayTypes = ['items' => [Item::class], 'containers' => [Container::class]];

    /**
     * @param  string  $purchaseOrderNumber Purchase order number corresponding to the shipment.
     * @param  Item[]  $items Provide the details of the items in this shipment. If any of the item details field is common at a package or a pallet level, then provide them at the corresponding package.
     * @param  ShipmentDetails  $shipmentDetails Details about a shipment.
     * @param  Container[]  $containers Provide the details of the items in this shipment. If any of the item details field is common at a package or a pallet level, then provide them at the corresponding package.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly array $items,
        public readonly ?ShipmentDetails $shipmentDetails = null,
        public readonly ?PartyIdentification $sellingParty = null,
        public readonly ?PartyIdentification $shipFromParty = null,
        public readonly ?array $containers = null,
    ) {
    }
}
