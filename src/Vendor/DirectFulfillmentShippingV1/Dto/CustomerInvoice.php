<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CustomerInvoice extends BaseDto
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
