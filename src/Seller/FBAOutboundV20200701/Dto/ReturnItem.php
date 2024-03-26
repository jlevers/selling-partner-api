<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ReturnItem extends BaseDto
{
    /**
     * @param  string  $sellerReturnItemId  An identifier assigned by the seller to the return item.
     * @param  string  $sellerFulfillmentOrderItemId  The identifier assigned to the item by the seller when the fulfillment order was created.
     * @param  string  $amazonShipmentId  The identifier for the shipment that is associated with the return item.
     * @param  string  $sellerReturnReasonCode  The return reason code assigned to the return item by the seller.
     * @param  string  $status  Indicates if the return item has been processed by a fulfillment center.
     * @param  DateTime  $statusChangedDate
     * @param  ?string  $returnComment  An optional comment about the return item.
     * @param  ?string  $amazonReturnReasonCode  The return reason code that the Amazon fulfillment center assigned to the return item.
     * @param  ?string  $returnAuthorizationId  Identifies the return authorization used to return this item. See ReturnAuthorization.
     * @param  ?string  $returnReceivedCondition  The condition of the return item when received by an Amazon fulfillment center.
     * @param  ?string  $fulfillmentCenterId  The identifier for the Amazon fulfillment center that processed the return item.
     */
    public function __construct(
        public readonly string $sellerReturnItemId,
        public readonly string $sellerFulfillmentOrderItemId,
        public readonly string $amazonShipmentId,
        public readonly string $sellerReturnReasonCode,
        public readonly string $status,
        public readonly \DateTime $statusChangedDate,
        public readonly ?string $returnComment = null,
        public readonly ?string $amazonReturnReasonCode = null,
        public readonly ?string $returnAuthorizationId = null,
        public readonly ?string $returnReceivedCondition = null,
        public readonly ?string $fulfillmentCenterId = null,
    ) {
    }
}
