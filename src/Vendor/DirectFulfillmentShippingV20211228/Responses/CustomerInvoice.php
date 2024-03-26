<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class CustomerInvoice extends BaseResponse
{
    /**
     * @param  string  $purchaseOrderNumber  The purchase order number for this order.
     * @param  string  $content  The Base64encoded customer invoice.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly string $content,
    ) {
    }
}
