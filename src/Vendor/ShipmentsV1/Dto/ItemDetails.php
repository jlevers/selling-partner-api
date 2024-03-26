<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemDetails extends BaseDto
{
    /**
     * @param  ?string  $purchaseOrderNumber  The purchase order number for the shipment being confirmed. If the items in this shipment belong to multiple purchase order numbers that are in particular carton or pallet within the shipment, then provide the purchaseOrderNumber at the appropriate carton or pallet level. Formatting Notes: 8-character alpha-numeric code.
     * @param  ?string  $lotNumber  The batch or lot number associates an item with information the manufacturer considers relevant for traceability of the trade item to which the Element String is applied. The data may refer to the trade item itself or to items contained. This field is mandatory for all perishable items.
     * @param  ?Expiry  $expiry
     * @param  ?Money  $maximumRetailPrice  An amount of money, including units in the form of currency.
     * @param  ?string  $handlingCode  Identification of the instructions on how specified item/carton/pallet should be handled.
     */
    public function __construct(
        public readonly ?string $purchaseOrderNumber = null,
        public readonly ?string $lotNumber = null,
        public readonly ?Expiry $expiry = null,
        public readonly ?Money $maximumRetailPrice = null,
        public readonly ?string $handlingCode = null,
    ) {
    }
}
