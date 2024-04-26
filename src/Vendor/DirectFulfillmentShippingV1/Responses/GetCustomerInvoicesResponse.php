<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\CustomerInvoiceList;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\Error;

final class GetCustomerInvoicesResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?CustomerInvoiceList  $payload
     * @param  Error[]  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?CustomerInvoiceList $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
