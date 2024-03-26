<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentInvoiceStatusInfo extends BaseDto
{
    protected static array $attributeMap = ['amazonShipmentId' => 'AmazonShipmentId', 'invoiceStatus' => 'InvoiceStatus'];

    /**
     * @param  ?string  $amazonShipmentId  The Amazon-defined shipment identifier.
     * @param  ?string  $invoiceStatus  The shipment invoice status.
     */
    public function __construct(
        public readonly ?string $amazonShipmentId = null,
        public readonly ?string $invoiceStatus = null,
    ) {
    }
}
