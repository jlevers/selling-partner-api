<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentOrder extends BaseDto
{
    protected static array $complexArrayTypes = ['featureConstraints' => [FeatureSettings::class]];

    /**
     * @param  string  $sellerFulfillmentOrderId  The fulfillment order identifier submitted with the createFulfillmentOrder operation.
     * @param  string  $marketplaceId  The identifier for the marketplace the fulfillment order is placed against.
     * @param  string  $displayableOrderId  A fulfillment order identifier submitted with the createFulfillmentOrder operation. Displays as the order identifier in recipient-facing materials such as the packing slip.
     * @param  DateTime  $displayableOrderDate
     * @param  string  $displayableOrderComment  A text block submitted with the createFulfillmentOrder operation. Displays in recipient-facing materials such as the packing slip.
     * @param  string  $shippingSpeedCategory  The shipping method used for the fulfillment order. When this value is ScheduledDelivery, choose Ship for the fulfillmentAction. Hold is not a valid fulfillmentAction value when the shippingSpeedCategory value is ScheduledDelivery.
     * @param  Address  $destinationAddress  A physical address.
     * @param  DateTime  $receivedDate
     * @param  string  $fulfillmentOrderStatus  The current status of the fulfillment order.
     * @param  DateTime  $statusUpdatedDate
     * @param  ?DeliveryWindow  $deliveryWindow  The time range within which a Scheduled Delivery fulfillment order should be delivered. This is only available in the JP marketplace.
     * @param  ?string  $fulfillmentAction  Specifies whether the fulfillment order should ship now or have an order hold put on it.
     * @param  ?string  $fulfillmentPolicy  The FulfillmentPolicy value specified when you submitted the createFulfillmentOrder operation.
     * @param  ?CodSettings  $codSettings  The COD (Cash On Delivery) charges that you associate with a COD fulfillment order.
     * @param  ?string[]  $notificationEmails  A list of email addresses that the seller provides that are used by Amazon to send ship-complete notifications to recipients on behalf of the seller.
     * @param  FeatureSettings[]|null  $featureConstraints  A list of features and their fulfillment policies to apply to the order.
     */
    public function __construct(
        public readonly string $sellerFulfillmentOrderId,
        public readonly string $marketplaceId,
        public readonly string $displayableOrderId,
        public readonly \DateTime $displayableOrderDate,
        public readonly string $displayableOrderComment,
        public readonly string $shippingSpeedCategory,
        public readonly Address $destinationAddress,
        public readonly \DateTime $receivedDate,
        public readonly string $fulfillmentOrderStatus,
        public readonly \DateTime $statusUpdatedDate,
        public readonly ?DeliveryWindow $deliveryWindow = null,
        public readonly ?string $fulfillmentAction = null,
        public readonly ?string $fulfillmentPolicy = null,
        public readonly ?CodSettings $codSettings = null,
        public readonly ?array $notificationEmails = null,
        public readonly ?array $featureConstraints = null,
    ) {
    }
}
