<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class PackingSlip extends BaseResponse
{
    /**
     * @param  string  $purchaseOrderNumber  Purchase order number of the shipment that the packing slip is for.
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
