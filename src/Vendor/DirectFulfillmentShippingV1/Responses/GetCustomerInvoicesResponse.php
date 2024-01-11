<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\CustomerInvoiceList;

final class GetCustomerInvoicesResponse extends BaseResponse
{
    /**
     * @param  ?CustomerInvoiceList  $customerInvoiceList
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?CustomerInvoiceList $customerInvoiceList = null,
        public readonly ?array $errors = null,
    ) {
    }
}
