<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\CustomerInvoice;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\Pagination;

final class CustomerInvoiceList extends BaseResponse
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
