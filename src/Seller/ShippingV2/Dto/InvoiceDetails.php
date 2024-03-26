<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InvoiceDetails extends BaseDto
{
    /**
     * @param  ?string  $invoiceNumber  The invoice number of the item.
     * @param  ?DateTime  $invoiceDate  The invoice date of the item in ISO 8061 format.
     */
    public function __construct(
        public readonly ?string $invoiceNumber = null,
        public readonly ?\DateTime $invoiceDate = null,
    ) {
    }
}
