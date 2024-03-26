<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentItem extends BaseDto
{
    protected static array $attributeMap = [
        'sellerSku' => 'SellerSKU',
        'orderItemId' => 'OrderItemId',
        'orderAdjustmentItemId' => 'OrderAdjustmentItemId',
        'quantityShipped' => 'QuantityShipped',
        'itemChargeList' => 'ItemChargeList',
        'itemChargeAdjustmentList' => 'ItemChargeAdjustmentList',
        'itemFeeList' => 'ItemFeeList',
        'itemFeeAdjustmentList' => 'ItemFeeAdjustmentList',
        'itemTaxWithheldList' => 'ItemTaxWithheldList',
        'promotionList' => 'PromotionList',
        'promotionAdjustmentList' => 'PromotionAdjustmentList',
        'costOfPointsGranted' => 'CostOfPointsGranted',
        'costOfPointsReturned' => 'CostOfPointsReturned',
    ];

    protected static array $complexArrayTypes = [
        'itemChargeList' => [ChargeComponent::class],
        'itemChargeAdjustmentList' => [ChargeComponent::class],
        'itemFeeList' => [FeeComponent::class],
        'itemFeeAdjustmentList' => [FeeComponent::class],
        'itemTaxWithheldList' => [TaxWithheldComponent::class],
        'promotionList' => [Promotion::class],
        'promotionAdjustmentList' => [Promotion::class],
    ];

    /**
     * @param  ?string  $sellerSku  The seller SKU of the item. The seller SKU is qualified by the seller's seller ID, which is included with every call to the Selling Partner API.
     * @param  ?string  $orderItemId  An Amazon-defined order item identifier.
     * @param  ?string  $orderAdjustmentItemId  An Amazon-defined order adjustment identifier defined for refunds, guarantee claims, and chargeback events.
     * @param  ?int  $quantityShipped  The number of items shipped.
     * @param  ChargeComponent[]|null  $itemChargeList  A list of charge information on the seller's account.
     * @param  ChargeComponent[]|null  $itemChargeAdjustmentList  A list of charge information on the seller's account.
     * @param  FeeComponent[]|null  $itemFeeList  A list of fee component information.
     * @param  FeeComponent[]|null  $itemFeeAdjustmentList  A list of fee component information.
     * @param  TaxWithheldComponent[]|null  $itemTaxWithheldList  A list of information about taxes withheld.
     * @param  Promotion[]|null  $promotionList  A list of promotions.
     * @param  Promotion[]|null  $promotionAdjustmentList  A list of promotions.
     * @param  ?Currency  $costOfPointsGranted  A currency type and amount.
     * @param  ?Currency  $costOfPointsReturned  A currency type and amount.
     */
    public function __construct(
        public readonly ?string $sellerSku = null,
        public readonly ?string $orderItemId = null,
        public readonly ?string $orderAdjustmentItemId = null,
        public readonly ?int $quantityShipped = null,
        public readonly ?array $itemChargeList = null,
        public readonly ?array $itemChargeAdjustmentList = null,
        public readonly ?array $itemFeeList = null,
        public readonly ?array $itemFeeAdjustmentList = null,
        public readonly ?array $itemTaxWithheldList = null,
        public readonly ?array $promotionList = null,
        public readonly ?array $promotionAdjustmentList = null,
        public readonly ?Currency $costOfPointsGranted = null,
        public readonly ?Currency $costOfPointsReturned = null,
    ) {
    }
}
