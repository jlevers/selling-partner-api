<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use SellingPartnerApi\Dto;

final class PackingSlip extends Dto
{
    /**
     * @param  string  $purchaseOrderNumber  Purchase order number of the shipment that corresponds to the packing slip.
     * @param  string  $content  A Base64encoded string of the packing slip PDF.
     * @param  ?string  $contentType  The format of the file such as PDF, JPEG etc.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly string $content,
        public readonly ?string $contentType = null,
    ) {
    }
}
