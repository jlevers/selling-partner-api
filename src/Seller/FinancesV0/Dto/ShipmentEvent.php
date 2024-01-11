<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentEvent extends BaseDto
{
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
     * @param  ?string  $amazonOrderId An Amazon-defined identifier for an order.
     * @param  ?string  $sellerOrderId A seller-defined identifier for an order.
     * @param  ?string  $marketplaceName The name of the marketplace where the event occurred.
     * @param  ChargeComponent[]  $orderChargeList A list of charge information on the seller's account.
     * @param  ChargeComponent[]  $orderChargeAdjustmentList A list of charge information on the seller's account.
     * @param  FeeComponent[]  $shipmentFeeList A list of fee component information.
     * @param  FeeComponent[]  $shipmentFeeAdjustmentList A list of fee component information.
     * @param  FeeComponent[]  $orderFeeList A list of fee component information.
     * @param  FeeComponent[]  $orderFeeAdjustmentList A list of fee component information.
     * @param  DirectPayment[]  $directPaymentList A list of direct payment information.
     * @param  ?string  $postedDate
     * @param  ShipmentItem[]  $shipmentItemList A list of shipment items.
     * @param  ShipmentItem[]  $shipmentItemAdjustmentList A list of shipment items.
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
        public readonly ?string $postedDate = null,
        public readonly ?array $shipmentItemList = null,
        public readonly ?array $shipmentItemAdjustmentList = null,
    ) {
    }
}
