<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdateFulfillmentOrderRequest extends BaseDto
{
    protected static array $complexArrayTypes = [
        'featureConstraints' => [FeatureSettings::class],
        'items' => [UpdateFulfillmentOrderItem::class],
    ];

    /**
     * @param  ?string  $marketplaceId  The marketplace the fulfillment order is placed against.
     * @param  ?string  $displayableOrderId  A fulfillment order identifier that the seller creates. This value displays as the order identifier in recipient-facing materials such as the outbound shipment packing slip. The value of DisplayableOrderId should match the order identifier that the seller provides to the recipient. The seller can use the SellerFulfillmentOrderId for this value or they can specify an alternate value if they want the recipient to reference an alternate order identifier.
     * @param  ?DateTime  $displayableOrderDate
     * @param  ?string  $displayableOrderComment  Order-specific text that appears in recipient-facing materials such as the outbound shipment packing slip.
     * @param  ?string  $shippingSpeedCategory  The shipping method used for the fulfillment order. When this value is ScheduledDelivery, choose Ship for the fulfillmentAction. Hold is not a valid fulfillmentAction value when the shippingSpeedCategory value is ScheduledDelivery.
     * @param  ?Address  $destinationAddress  A physical address.
     * @param  ?string  $fulfillmentAction  Specifies whether the fulfillment order should ship now or have an order hold put on it.
     * @param  ?string  $fulfillmentPolicy  The FulfillmentPolicy value specified when you submitted the createFulfillmentOrder operation.
     * @param  ?string  $shipFromCountryCode  The two-character country code for the country from which the fulfillment order ships. Must be in ISO 3166-1 alpha-2 format.
     * @param  ?string[]  $notificationEmails  A list of email addresses that the seller provides that are used by Amazon to send ship-complete notifications to recipients on behalf of the seller.
     * @param  FeatureSettings[]|null  $featureConstraints  A list of features and their fulfillment policies to apply to the order.
     * @param  UpdateFulfillmentOrderItem[]|null  $items  An array of fulfillment order item information for updating a fulfillment order.
     */
    public function __construct(
        public readonly ?string $marketplaceId = null,
        public readonly ?string $displayableOrderId = null,
        public readonly ?\DateTime $displayableOrderDate = null,
        public readonly ?string $displayableOrderComment = null,
        public readonly ?string $shippingSpeedCategory = null,
        public readonly ?Address $destinationAddress = null,
        public readonly ?string $fulfillmentAction = null,
        public readonly ?string $fulfillmentPolicy = null,
        public readonly ?string $shipFromCountryCode = null,
        public readonly ?array $notificationEmails = null,
        public readonly ?array $featureConstraints = null,
        public readonly ?array $items = null,
    ) {
    }
}
