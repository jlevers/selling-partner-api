<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InventoryUpdate extends BaseDto
{
    protected static array $complexArrayTypes = ['items' => [ItemDetails::class]];

    /**
     * @param  bool  $isFullUpdate  When true, this request contains a full feed. Otherwise, this request contains a partial feed. When sending a full feed, you must send information about all items in the warehouse. Any items not in the full feed are updated as not available. When sending a partial feed, only include the items that need an update to inventory. The status of other items will remain unchanged.
     * @param  ItemDetails[]  $items  A list of inventory items with updated details, including quantity available.
     */
    public function __construct(
        public readonly PartyIdentification $sellingParty,
        public readonly bool $isFullUpdate,
        public readonly ?array $items = null,
    ) {
    }
}
