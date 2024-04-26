<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use SellingPartnerApi\Dto;

final class InvoiceData extends Dto
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
