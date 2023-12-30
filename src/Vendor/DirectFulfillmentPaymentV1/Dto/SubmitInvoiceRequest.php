<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitInvoiceRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['invoices' => [InvoiceDetail::class]];

    /**
     * @param  InvoiceDetail[]  $invoices
     */
    public function __construct(
        public readonly ?array $invoices = null,
    ) {
    }
}
