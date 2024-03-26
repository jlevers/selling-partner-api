<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentDetail extends BaseDto
{
    protected static array $attributeMap = [
        'warehouseId' => 'WarehouseId',
        'amazonOrderId' => 'AmazonOrderId',
        'amazonShipmentId' => 'AmazonShipmentId',
        'purchaseDate' => 'PurchaseDate',
        'shippingAddress' => 'ShippingAddress',
        'paymentMethodDetails' => 'PaymentMethodDetails',
        'marketplaceId' => 'MarketplaceId',
        'sellerId' => 'SellerId',
        'buyerName' => 'BuyerName',
        'buyerCounty' => 'BuyerCounty',
        'buyerTaxInfo' => 'BuyerTaxInfo',
        'marketplaceTaxInfo' => 'MarketplaceTaxInfo',
        'sellerDisplayName' => 'SellerDisplayName',
        'shipmentItems' => 'ShipmentItems',
    ];

    protected static array $complexArrayTypes = ['shipmentItems' => [ShipmentItem::class]];

    /**
     * @param  ?string  $warehouseId  The Amazon-defined identifier for the warehouse.
     * @param  ?string  $amazonOrderId  The Amazon-defined identifier for the order.
     * @param  ?string  $amazonShipmentId  The Amazon-defined identifier for the shipment.
     * @param  ?DateTime  $purchaseDate  The date and time when the order was created.
     * @param  ?Address  $shippingAddress  The shipping address details of the shipment.
     * @param  ?string[]  $paymentMethodDetails  The list of payment method details.
     * @param  ?string  $marketplaceId  The identifier for the marketplace where the order was placed.
     * @param  ?string  $sellerId  The seller identifier.
     * @param  ?string  $buyerName  The name of the buyer.
     * @param  ?string  $buyerCounty  The county of the buyer.
     * @param  ?BuyerTaxInfo  $buyerTaxInfo  Tax information about the buyer.
     * @param  ?MarketplaceTaxInfo  $marketplaceTaxInfo  Tax information about the marketplace.
     * @param  ?string  $sellerDisplayName  The seller’s friendly name registered in the marketplace.
     * @param  ShipmentItem[]|null  $shipmentItems  A list of shipment items.
     */
    public function __construct(
        public readonly ?string $warehouseId = null,
        public readonly ?string $amazonOrderId = null,
        public readonly ?string $amazonShipmentId = null,
        public readonly ?\DateTime $purchaseDate = null,
        public readonly ?Address $shippingAddress = null,
        public readonly ?array $paymentMethodDetails = null,
        public readonly ?string $marketplaceId = null,
        public readonly ?string $sellerId = null,
        public readonly ?string $buyerName = null,
        public readonly ?string $buyerCounty = null,
        public readonly ?BuyerTaxInfo $buyerTaxInfo = null,
        public readonly ?MarketplaceTaxInfo $marketplaceTaxInfo = null,
        public readonly ?string $sellerDisplayName = null,
        public readonly ?array $shipmentItems = null,
    ) {
    }
}
