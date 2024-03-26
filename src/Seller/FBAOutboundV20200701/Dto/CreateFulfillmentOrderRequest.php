<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateFulfillmentOrderRequest extends BaseDto
{
    protected static array $complexArrayTypes = [
        'items' => [CreateFulfillmentOrderItem::class],
        'featureConstraints' => [FeatureSettings::class],
    ];

    /**
     * @param  string  $sellerFulfillmentOrderId  A fulfillment order identifier that the seller creates to track their fulfillment order. The SellerFulfillmentOrderId must be unique for each fulfillment order that a seller creates. If the seller's system already creates unique order identifiers, then these might be good values for them to use.
     * @param  string  $displayableOrderId  A fulfillment order identifier that the seller creates. This value displays as the order identifier in recipient-facing materials such as the outbound shipment packing slip. The value of DisplayableOrderId should match the order identifier that the seller provides to the recipient. The seller can use the SellerFulfillmentOrderId for this value or they can specify an alternate value if they want the recipient to reference an alternate order identifier.
     *
     * The value must be an alpha-numeric or ISO 8859-1 compliant string from one to 40 characters in length. Cannot contain two spaces in a row. Leading and trailing white space is removed.
     * @param  DateTime  $displayableOrderDate
     * @param  string  $displayableOrderComment  Order-specific text that appears in recipient-facing materials such as the outbound shipment packing slip.
     * @param  string  $shippingSpeedCategory  The shipping method used for the fulfillment order. When this value is ScheduledDelivery, choose Ship for the fulfillmentAction. Hold is not a valid fulfillmentAction value when the shippingSpeedCategory value is ScheduledDelivery.
     * @param  Address  $destinationAddress  A physical address.
     * @param  CreateFulfillmentOrderItem[]  $items  An array of item information for creating a fulfillment order.
     * @param  ?string  $marketplaceId  The marketplace the fulfillment order is placed against.
     * @param  ?DeliveryWindow  $deliveryWindow  The time range within which a Scheduled Delivery fulfillment order should be delivered. This is only available in the JP marketplace.
     * @param  ?string  $fulfillmentAction  Specifies whether the fulfillment order should ship now or have an order hold put on it.
     * @param  ?string  $fulfillmentPolicy  The FulfillmentPolicy value specified when you submitted the createFulfillmentOrder operation.
     * @param  ?CodSettings  $codSettings  The COD (Cash On Delivery) charges that you associate with a COD fulfillment order.
     * @param  ?string  $shipFromCountryCode  The two-character country code for the country from which the fulfillment order ships. Must be in ISO 3166-1 alpha-2 format.
     * @param  ?string[]  $notificationEmails  A list of email addresses that the seller provides that are used by Amazon to send ship-complete notifications to recipients on behalf of the seller.
     * @param  FeatureSettings[]|null  $featureConstraints  A list of features and their fulfillment policies to apply to the order.
     */
    public function __construct(
        public readonly string $sellerFulfillmentOrderId,
        public readonly string $displayableOrderId,
        public readonly \DateTime $displayableOrderDate,
        public readonly string $displayableOrderComment,
        public readonly string $shippingSpeedCategory,
        public readonly Address $destinationAddress,
        public readonly array $items,
        public readonly ?string $marketplaceId = null,
        public readonly ?DeliveryWindow $deliveryWindow = null,
        public readonly ?string $fulfillmentAction = null,
        public readonly ?string $fulfillmentPolicy = null,
        public readonly ?CodSettings $codSettings = null,
        public readonly ?string $shipFromCountryCode = null,
        public readonly ?array $notificationEmails = null,
        public readonly ?array $featureConstraints = null,
    ) {
    }
}
