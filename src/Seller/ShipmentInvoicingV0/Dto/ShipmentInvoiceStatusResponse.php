<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentInvoiceStatusResponse extends BaseDto
{
    protected static array $attributeMap = ['shipments' => 'Shipments'];

    /**
     * @param  ?ShipmentInvoiceStatusInfo  $shipments  The shipment invoice status information.
     */
    public function __construct(
        public readonly ?ShipmentInvoiceStatusInfo $shipments = null,
    ) {
    }
}
