<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\Pagination;

final class CustomerInvoiceList extends Response
{
    protected static array $complexArrayTypes = ['customerInvoices' => [CustomerInvoice::class]];

    /**
     * @param  ?Pagination  $pagination
     * @param  CustomerInvoice[]  $customerInvoices
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $customerInvoices = null,
    ) {
    }
}
