<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\CustomerInvoice;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\Error;

final class GetCustomerInvoiceResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?CustomerInvoice  $payload
     * @param  Error[]  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?CustomerInvoice $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
