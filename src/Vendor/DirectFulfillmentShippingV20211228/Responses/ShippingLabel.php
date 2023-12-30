<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\PartyIdentification;

final class ShippingLabel extends BaseResponse
{
    /**
     * @param  string  $purchaseOrderNumber This field will contain the Purchase Order Number for this order.
     * @param  string  $labelFormat Format of the label.
     * @param  LabelData[]  $labelData Provides the details of the packages in this shipment.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly string $labelFormat,
        public readonly array $labelData,
        public readonly ?PartyIdentification $sellingParty = null,
        public readonly ?PartyIdentification $shipFromParty = null,
    ) {
    }
}
