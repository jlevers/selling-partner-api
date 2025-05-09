<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses;

use SellingPartnerApi\Response;

final class PackingSlip extends Response
{
    /**
     * @param  string  $purchaseOrderNumber  Purchase order number of the shipment that the packing slip is for.
     * @param  string  $content  A Base64 string of the packing slip PDF.
     * @param  ?string  $contentType  The format of the file such as PDF, JPEG etc.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly string $content,
        public readonly ?string $contentType = null,
    ) {}
}
