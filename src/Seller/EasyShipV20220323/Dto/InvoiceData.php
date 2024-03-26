<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InvoiceData extends BaseDto
{
    /**
     * @param  string  $invoiceNumber  A string of up to 255 characters.
     * @param  ?DateTime  $invoiceDate  A datetime value in ISO 8601 format.
     */
    public function __construct(
        public readonly string $invoiceNumber,
        public readonly ?\DateTime $invoiceDate = null,
    ) {
    }
}
