<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class ShipmentRequestDetails extends Dto
{
    protected static array $attributeMap = [
        'amazonOrderId' => 'AmazonOrderId',
        'itemList' => 'ItemList',
        'shipFromAddress' => 'ShipFromAddress',
        'packageDimensions' => 'PackageDimensions',
        'weight' => 'Weight',
        'shippingServiceOptions' => 'ShippingServiceOptions',
        'sellerOrderId' => 'SellerOrderId',
        'mustArriveByDate' => 'MustArriveByDate',
        'shipDate' => 'ShipDate',
        'labelCustomization' => 'LabelCustomization',
    ];

    protected static array $complexArrayTypes = ['itemList' => Item::class];

    /**
     * @param  string  $amazonOrderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  Item[]  $itemList  The list of items you want to include in a shipment.
     * @param  Address  $shipFromAddress  The postal address information.
     * @param  PackageDimensions  $packageDimensions  The dimensions of a package contained in a shipment.
     * @param  Weight  $weight  The weight.
     * @param  ShippingServiceOptions  $shippingServiceOptions  Extra services provided by a carrier.
     * @param  ?string  $sellerOrderId  A seller-defined order identifier.
     * @param  ?\DateTimeInterface  $mustArriveByDate  Date-time formatted timestamp.
     * @param  ?\DateTimeInterface  $shipDate  Date-time formatted timestamp.
     * @param  ?LabelCustomization  $labelCustomization  Custom text for shipping labels.
     */
    public function __construct(
        public string $amazonOrderId,
        public array $itemList,
        public Address $shipFromAddress,
        public PackageDimensions $packageDimensions,
        public Weight $weight,
        public ShippingServiceOptions $shippingServiceOptions,
        public ?string $sellerOrderId = null,
        public ?\DateTimeInterface $mustArriveByDate = null,
        public ?\DateTimeInterface $shipDate = null,
        public ?LabelCustomization $labelCustomization = null,
    ) {}
}
