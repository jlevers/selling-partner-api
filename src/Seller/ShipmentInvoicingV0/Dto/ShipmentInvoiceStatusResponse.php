<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentInvoiceStatusResponse extends BaseDto
{
    /**
     * @param  ShipmentInvoiceStatusInfo  $shipments The shipment invoice status information.
     */
    public function __construct(
        public readonly ShipmentInvoiceStatusInfo $shipments,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
