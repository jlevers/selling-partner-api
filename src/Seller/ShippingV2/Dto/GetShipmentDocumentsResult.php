<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetShipmentDocumentsResult extends BaseDto
{
    /**
     * @param  string  $shipmentId  The unique shipment identifier provided by a shipping service.
     * @param  PackageDocumentDetail  $packageDocumentDetail  The post-purchase details of a package that will be shipped using a shipping service.
     */
    public function __construct(
        public readonly string $shipmentId,
        public readonly PackageDocumentDetail $packageDocumentDetail,
    ) {
    }
}
