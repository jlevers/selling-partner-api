<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\CustomerInvoice;

final class GetCustomerInvoiceResponse extends BaseResponse
{
    /**
     * @param  ?CustomerInvoice  $customerInvoice
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?CustomerInvoice $customerInvoice = null,
        public readonly ?array $errors = null,
    ) {
    }
}
