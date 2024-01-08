<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RemovalShipmentEvent extends BaseDto
{
    protected static array $complexArrayTypes = ['removalShipmentItemList' => [RemovalShipmentItem::class]];

    /**
     * @param  ?string  $postedDate
     * @param  ?string  $merchantOrderId The merchant removal orderId.
     * @param  ?string  $orderId The identifier for the removal shipment order.
     * @param  ?string  $transactionType The type of removal order.
     *
     * Possible values:
     *
     * * WHOLESALE_LIQUIDATION
     * @param  RemovalShipmentItem[]  $removalShipmentItemList A list of information about removal shipment items.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $postedDate = null,
        public readonly ?string $merchantOrderId = null,
        public readonly ?string $orderId = null,
        public readonly ?string $transactionType = null,
        public readonly ?array $removalShipmentItemList = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
