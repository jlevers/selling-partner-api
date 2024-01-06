<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Shipment extends BaseDto
{
    protected static array $complexArrayTypes = ['itemList' => [Item::class]];

    /**
     * @param  string  $shipmentId An Amazon-defined shipment identifier.
     * @param  string  $amazonOrderId An Amazon-defined order identifier, in 3-7-7 format.
     * @param  Address  $shipFromAddress The postal address information.
     * @param  Address  $shipToAddress The postal address information.
     * @param  PackageDimensions  $packageDimensions The dimensions of a package contained in a shipment.
     * @param  Weight  $weight The weight.
     * @param  CurrencyAmount  $insurance Currency type and amount.
     * @param  ShippingService  $shippingService A shipping service offer made by a carrier.
     * @param  Label  $label Data for creating a shipping label and dimensions for printing the label.
     * @param  string  $status The shipment status.
     * @param  string  $sellerOrderId A seller-defined order identifier.
     * @param  Item[]  $itemList The list of items to be included in a shipment.
     * @param  string  $trackingId The shipment tracking identifier provided by the carrier.
     */
    public function __construct(
        public readonly string $shipmentId,
        public readonly string $amazonOrderId,
        public readonly Address $shipFromAddress,
        public readonly Address $shipToAddress,
        public readonly PackageDimensions $packageDimensions,
        public readonly Weight $weight,
        public readonly CurrencyAmount $insurance,
        public readonly ShippingService $shippingService,
        public readonly Label $label,
        public readonly string $status,
        public readonly string $createdDate,
        public readonly ?string $sellerOrderId = null,
        public readonly ?array $itemList = null,
        public readonly ?string $trackingId = null,
        public readonly ?string $lastUpdatedDate = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
