<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class InvoiceDetails extends Dto
{
    /**
     * @param  ?string  $invoiceNumber  The invoice number of the item.
     * @param  ?\DateTimeInterface  $invoiceDate  The invoice date of the item in ISO 8061 format.
     */
    public function __construct(
        public readonly ?string $invoiceNumber = null,
        public readonly ?\DateTimeInterface $invoiceDate = null,
    ) {
    }
}
