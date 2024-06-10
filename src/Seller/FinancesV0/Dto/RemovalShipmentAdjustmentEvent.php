<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class RemovalShipmentAdjustmentEvent extends Dto
{
    protected static array $attributeMap = [
        'postedDate' => 'PostedDate',
        'adjustmentEventId' => 'AdjustmentEventId',
        'merchantOrderId' => 'MerchantOrderId',
        'orderId' => 'OrderId',
        'transactionType' => 'TransactionType',
        'removalShipmentItemAdjustmentList' => 'RemovalShipmentItemAdjustmentList',
    ];

    protected static array $complexArrayTypes = [
        'removalShipmentItemAdjustmentList' => [RemovalShipmentItemAdjustment::class],
    ];

    /**
     * @param  ?\DateTimeInterface  $postedDate
     * @param  ?string  $adjustmentEventId  The unique identifier for the adjustment event.
     * @param  ?string  $merchantOrderId  The merchant removal orderId.
     * @param  ?string  $orderId  The orderId for shipping inventory.
     * @param  ?string  $transactionType  The type of removal order.
     *
     * Possible values:
     *
     * * WHOLESALE_LIQUIDATION.
     * @param  RemovalShipmentItemAdjustment[]|null  $removalShipmentItemAdjustmentList  A comma-delimited list of Removal shipmentItemAdjustment details for FBA inventory.
     */
    public function __construct(
        public readonly ?\DateTimeInterface $postedDate = null,
        public readonly ?string $adjustmentEventId = null,
        public readonly ?string $merchantOrderId = null,
        public readonly ?string $orderId = null,
        public readonly ?string $transactionType = null,
        public readonly ?array $removalShipmentItemAdjustmentList = null,
    ) {
    }
}
