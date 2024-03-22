<?php

namespace SellingPartnerApi\Vendor\InvoicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitInvoicesRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['invoices' => [Invoice::class]];

    /**
     * @param  Invoice[]  $invoices
     */
    public function __construct(
        public readonly ?array $invoices = null,
    ) {
    }
}
