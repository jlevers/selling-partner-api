<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CustomerInvoiceList extends BaseDto
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
