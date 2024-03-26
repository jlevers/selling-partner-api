<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DirectPurchaseResult extends BaseDto
{
    protected static array $complexArrayTypes = ['packageDocumentDetailList' => [PackageDocumentDetail::class]];

    /**
     * @param  string  $shipmentId  The unique shipment identifier provided by a shipping service.
     * @param  PackageDocumentDetail[]|null  $packageDocumentDetailList  A list of post-purchase details about a package that will be shipped using a shipping service.
     */
    public function __construct(
        public readonly string $shipmentId,
        public readonly ?array $packageDocumentDetailList = null,
    ) {
    }
}
