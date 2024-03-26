<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto\Error;

final class SubmitInvoiceResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $errors = null,
    ) {
    }
}
