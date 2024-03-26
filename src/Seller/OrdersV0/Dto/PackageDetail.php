<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PackageDetail extends BaseDto
{
    protected static array $complexArrayTypes = ['orderItems' => [ConfirmShipmentOrderItem::class]];

    /**
     * @param  string  $packageReferenceId  A seller-supplied identifier that uniquely identifies a package within the scope of an order. Only positive numeric values are supported.
     * @param  string  $carrierCode  Identifies the carrier that will deliver the package. This field is required for all marketplaces, see [reference](https://developer-docs.amazon.com/sp-api/changelog/carriercode-value-required-in-shipment-confirmations-for-br-mx-ca-sg-au-in-jp-marketplaces).
     * @param  string  $trackingNumber  The tracking number used to obtain tracking and delivery information.
     * @param  DateTime  $shipDate  The shipping date for the package. Must be in ISO-8601 date/time format.
     * @param  ConfirmShipmentOrderItem[]  $orderItems  A list of order items.
     * @param  ?string  $carrierName  Carrier Name that will deliver the package. Required when carrierCode is "Others"
     * @param  ?string  $shippingMethod  Ship method to be used for shipping the order.
     * @param  ?string  $shipFromSupplySourceId  The unique identifier of the supply source.
     */
    public function __construct(
        public readonly string $packageReferenceId,
        public readonly string $carrierCode,
        public readonly string $trackingNumber,
        public readonly \DateTime $shipDate,
        public readonly array $orderItems,
        public readonly ?string $carrierName = null,
        public readonly ?string $shippingMethod = null,
        public readonly ?string $shipFromSupplySourceId = null,
    ) {
    }
}
