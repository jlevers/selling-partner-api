<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RemovalShipmentEvent extends BaseDto
{
    protected static array $attributeMap = [
        'postedDate' => 'PostedDate',
        'merchantOrderId' => 'MerchantOrderId',
        'orderId' => 'OrderId',
        'transactionType' => 'TransactionType',
        'removalShipmentItemList' => 'RemovalShipmentItemList',
    ];

    protected static array $complexArrayTypes = ['removalShipmentItemList' => [RemovalShipmentItem::class]];

    /**
     * @param  ?DateTime  $postedDate
     * @param  ?string  $merchantOrderId  The merchant removal orderId.
     * @param  ?string  $orderId  The identifier for the removal shipment order.
     * @param  ?string  $transactionType  The type of removal order.
     *
     * Possible values:
     *
     * * WHOLESALE_LIQUIDATION
     * @param  RemovalShipmentItem[]|null  $removalShipmentItemList  A list of information about removal shipment items.
     */
    public function __construct(
        public readonly ?\DateTime $postedDate = null,
        public readonly ?string $merchantOrderId = null,
        public readonly ?string $orderId = null,
        public readonly ?string $transactionType = null,
        public readonly ?array $removalShipmentItemList = null,
    ) {
    }
}
