<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto;

use SellingPartnerApi\Dto;

final class SubmitInvoiceRequest extends Dto
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
