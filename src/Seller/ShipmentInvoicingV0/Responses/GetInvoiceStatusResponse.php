<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto\ShipmentInvoiceStatusResponse;

final class GetInvoiceStatusResponse extends BaseResponse
{
    /**
     * @param  ShipmentInvoiceStatusResponse  $payload The shipment invoice status response.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ShipmentInvoiceStatusResponse $payload,
        public readonly array $errors,
    ) {
    }
}
