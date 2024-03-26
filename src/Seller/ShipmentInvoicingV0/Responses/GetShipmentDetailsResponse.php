<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto\Error;
use SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto\ShipmentDetail;

final class GetShipmentDetailsResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?ShipmentDetail  $payload  The information required by a selling partner to issue a shipment invoice.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ShipmentDetail $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
