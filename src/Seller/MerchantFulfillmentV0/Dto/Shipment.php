<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Shipment extends BaseDto
{
    protected static array $attributeMap = [
        'shipmentId' => 'ShipmentId',
        'amazonOrderId' => 'AmazonOrderId',
        'itemList' => 'ItemList',
        'shipFromAddress' => 'ShipFromAddress',
        'shipToAddress' => 'ShipToAddress',
        'packageDimensions' => 'PackageDimensions',
        'weight' => 'Weight',
        'insurance' => 'Insurance',
        'shippingService' => 'ShippingService',
        'label' => 'Label',
        'status' => 'Status',
        'createdDate' => 'CreatedDate',
        'sellerOrderId' => 'SellerOrderId',
        'trackingId' => 'TrackingId',
        'lastUpdatedDate' => 'LastUpdatedDate',
    ];

    protected static array $complexArrayTypes = ['itemList' => [Item::class]];

    /**
     * @param  string  $shipmentId  An Amazon-defined shipment identifier.
     * @param  string  $amazonOrderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  Item[]  $itemList  The list of items to be included in a shipment.
     * @param  Address  $shipFromAddress  The postal address information.
     * @param  Address  $shipToAddress  The postal address information.
     * @param  PackageDimensions  $packageDimensions  The dimensions of a package contained in a shipment.
     * @param  Weight  $weight  The weight.
     * @param  CurrencyAmount  $insurance  Currency type and amount.
     * @param  ShippingService  $shippingService  A shipping service offer made by a carrier.
     * @param  Label  $label  Data for creating a shipping label and dimensions for printing the label.
     * @param  string  $status  The shipment status.
     * @param  DateTime  $createdDate
     * @param  ?string  $sellerOrderId  A seller-defined order identifier.
     * @param  ?string  $trackingId  The shipment tracking identifier provided by the carrier.
     * @param  ?DateTime  $lastUpdatedDate
     */
    public function __construct(
        public readonly string $shipmentId,
        public readonly string $amazonOrderId,
        public readonly array $itemList,
        public readonly Address $shipFromAddress,
        public readonly Address $shipToAddress,
        public readonly PackageDimensions $packageDimensions,
        public readonly Weight $weight,
        public readonly CurrencyAmount $insurance,
        public readonly ShippingService $shippingService,
        public readonly Label $label,
        public readonly string $status,
        public readonly \DateTime $createdDate,
        public readonly ?string $sellerOrderId = null,
        public readonly ?string $trackingId = null,
        public readonly ?\DateTime $lastUpdatedDate = null,
    ) {
    }
}
