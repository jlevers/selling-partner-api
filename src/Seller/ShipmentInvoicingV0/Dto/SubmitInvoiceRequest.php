<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitInvoiceRequest extends BaseDto
{
    /**
     * @param  string  $contentMd5value MD5 sum for validating the invoice data. For more information about calculating this value, see [Working with Content-MD5 Checksums](https://docs.developer.amazonservices.com/en_US/dev_guide/DG_MD5.html).
     * @param  string  $invoiceContent Shipment invoice document content.
     * @param  string  $marketplaceId An Amazon marketplace identifier.
     */
    public function __construct(
        public readonly ?string $contentMd5value = null,
        public readonly ?string $invoiceContent = null,
        public readonly ?string $marketplaceId = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
