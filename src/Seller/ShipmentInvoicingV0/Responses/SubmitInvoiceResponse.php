<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class SubmitInvoiceResponse extends BaseResponse
{
    /**
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly array $errors,
    ) {
    }
}
