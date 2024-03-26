<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentEvent extends BaseDto
{
    protected static array $attributeMap = [
        'amazonOrderId' => 'AmazonOrderId',
        'sellerOrderId' => 'SellerOrderId',
        'marketplaceName' => 'MarketplaceName',
        'orderChargeList' => 'OrderChargeList',
        'orderChargeAdjustmentList' => 'OrderChargeAdjustmentList',
        'shipmentFeeList' => 'ShipmentFeeList',
        'shipmentFeeAdjustmentList' => 'ShipmentFeeAdjustmentList',
        'orderFeeList' => 'OrderFeeList',
        'orderFeeAdjustmentList' => 'OrderFeeAdjustmentList',
        'directPaymentList' => 'DirectPaymentList',
        'postedDate' => 'PostedDate',
        'shipmentItemList' => 'ShipmentItemList',
        'shipmentItemAdjustmentList' => 'ShipmentItemAdjustmentList',
    ];

    protected static array $complexArrayTypes = [
        'orderChargeList' => [ChargeComponent::class],
        'orderChargeAdjustmentList' => [ChargeComponent::class],
        'shipmentFeeList' => [FeeComponent::class],
        'shipmentFeeAdjustmentList' => [FeeComponent::class],
        'orderFeeList' => [FeeComponent::class],
        'orderFeeAdjustmentList' => [FeeComponent::class],
        'directPaymentList' => [DirectPayment::class],
        'shipmentItemList' => [ShipmentItem::class],
        'shipmentItemAdjustmentList' => [ShipmentItem::class],
    ];

    /**
     * @param  ?string  $amazonOrderId  An Amazon-defined identifier for an order.
     * @param  ?string  $sellerOrderId  A seller-defined identifier for an order.
     * @param  ?string  $marketplaceName  The name of the marketplace where the event occurred.
     * @param  ChargeComponent[]|null  $orderChargeList  A list of charge information on the seller's account.
     * @param  ChargeComponent[]|null  $orderChargeAdjustmentList  A list of charge information on the seller's account.
     * @param  FeeComponent[]|null  $shipmentFeeList  A list of fee component information.
     * @param  FeeComponent[]|null  $shipmentFeeAdjustmentList  A list of fee component information.
     * @param  FeeComponent[]|null  $orderFeeList  A list of fee component information.
     * @param  FeeComponent[]|null  $orderFeeAdjustmentList  A list of fee component information.
     * @param  DirectPayment[]|null  $directPaymentList  A list of direct payment information.
     * @param  ?DateTime  $postedDate
     * @param  ShipmentItem[]|null  $shipmentItemList  A list of shipment items.
     * @param  ShipmentItem[]|null  $shipmentItemAdjustmentList  A list of shipment items.
     */
    public function __construct(
        public readonly ?string $amazonOrderId = null,
        public readonly ?string $sellerOrderId = null,
        public readonly ?string $marketplaceName = null,
        public readonly ?array $orderChargeList = null,
        public readonly ?array $orderChargeAdjustmentList = null,
        public readonly ?array $shipmentFeeList = null,
        public readonly ?array $shipmentFeeAdjustmentList = null,
        public readonly ?array $orderFeeList = null,
        public readonly ?array $orderFeeAdjustmentList = null,
        public readonly ?array $directPaymentList = null,
        public readonly ?\DateTime $postedDate = null,
        public readonly ?array $shipmentItemList = null,
        public readonly ?array $shipmentItemAdjustmentList = null,
    ) {
    }
}
