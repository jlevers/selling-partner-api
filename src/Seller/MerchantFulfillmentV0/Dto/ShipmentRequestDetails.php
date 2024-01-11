<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentRequestDetails extends BaseDto
{
    protected static array $complexArrayTypes = ['itemList' => [Item::class]];

    /**
     * @param  string  $amazonOrderId An Amazon-defined order identifier, in 3-7-7 format.
     * @param  Address  $shipFromAddress The postal address information.
     * @param  PackageDimensions  $packageDimensions The dimensions of a package contained in a shipment.
     * @param  Weight  $weight The weight.
     * @param  ShippingServiceOptions  $shippingServiceOptions Extra services provided by a carrier.
     * @param  ?string  $sellerOrderId A seller-defined order identifier.
     * @param  Item[]  $itemList The list of items to be included in a shipment.
     * @param  ?string  $mustArriveByDate
     * @param  ?string  $shipDate
     * @param  ?LabelCustomization  $labelCustomization Custom text for shipping labels.
     */
    public function __construct(
        public readonly string $amazonOrderId,
        public readonly Address $shipFromAddress,
        public readonly PackageDimensions $packageDimensions,
        public readonly Weight $weight,
        public readonly ShippingServiceOptions $shippingServiceOptions,
        public readonly ?string $sellerOrderId = null,
        public readonly ?array $itemList = null,
        public readonly ?string $mustArriveByDate = null,
        public readonly ?string $shipDate = null,
        public readonly ?LabelCustomization $labelCustomization = null,
    ) {
    }
}
