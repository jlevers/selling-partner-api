<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentDetail extends BaseDto
{
    protected static array $complexArrayTypes = ['shipmentItems' => [ShipmentItem::class]];

    /**
     * @param  string  $warehouseId The Amazon-defined identifier for the warehouse.
     * @param  string  $amazonOrderId The Amazon-defined identifier for the order.
     * @param  string  $amazonShipmentId The Amazon-defined identifier for the shipment.
     * @param  string  $purchaseDate The date and time when the order was created.
     * @param  Address  $shippingAddress The shipping address details of the shipment.
     * @param  string[]  $paymentMethodDetails The list of payment method details.
     * @param  string  $marketplaceId The identifier for the marketplace where the order was placed.
     * @param  string  $sellerId The seller identifier.
     * @param  string  $buyerName The name of the buyer.
     * @param  string  $buyerCounty The county of the buyer.
     * @param  BuyerTaxInfo  $buyerTaxInfo Tax information about the buyer.
     * @param  MarketplaceTaxInfo  $marketplaceTaxInfo Tax information about the marketplace.
     * @param  string  $sellerDisplayName The seller’s friendly name registered in the marketplace.
     * @param  ShipmentItem[]  $shipmentItems A list of shipment items.
     */
    public function __construct(
        public readonly string $warehouseId,
        public readonly string $amazonOrderId,
        public readonly string $amazonShipmentId,
        public readonly string $purchaseDate,
        public readonly Address $shippingAddress,
        public readonly array $paymentMethodDetails,
        public readonly string $marketplaceId,
        public readonly string $sellerId,
        public readonly string $buyerName,
        public readonly string $buyerCounty,
        public readonly BuyerTaxInfo $buyerTaxInfo,
        public readonly MarketplaceTaxInfo $marketplaceTaxInfo,
        public readonly string $sellerDisplayName,
        public readonly array $shipmentItems,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
