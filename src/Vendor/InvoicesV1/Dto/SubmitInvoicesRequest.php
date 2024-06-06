<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\InvoicesV1\Dto;

use SellingPartnerApi\Dto;

final class SubmitInvoicesRequest extends Dto
{
    protected static array $complexArrayTypes = ['invoices' => [Invoice::class]];

    /**
     * @param  Invoice[]|null  $invoices
     */
    public function __construct(
        public readonly ?array $invoices = null,
    ) {
    }
}
