<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PurchaseShipmentResult extends BaseDto
{
    protected static array $complexArrayTypes = ['packageDocumentDetails' => [PackageDocumentDetail::class]];

    /**
     * @param  string  $shipmentId  The unique shipment identifier provided by a shipping service.
     * @param  PackageDocumentDetail[]  $packageDocumentDetails  A list of post-purchase details about a package that will be shipped using a shipping service.
     * @param  Promise  $promise  The time windows promised for pickup and delivery events.
     */
    public function __construct(
        public readonly string $shipmentId,
        public readonly array $packageDocumentDetails,
        public readonly Promise $promise,
    ) {
    }
}
