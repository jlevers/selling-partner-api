<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Subscription extends BaseDto
{
    /**
     * @param  string  $subscriptionId  The subscription identifier generated when the subscription is created.
     * @param  string  $payloadVersion  The version of the payload object to be used in the notification.
     * @param  string  $destinationId  The identifier for the destination where notifications will be delivered.
     * @param  ?ProcessingDirective  $processingDirective  Additional information passed to the subscription to control the processing of notifications. For example, you can use an `eventFilter` to customize your subscription to send notifications for only the specified marketplaceId's, or select the aggregation time period at which to send notifications (e.g. limit to one notification every five minutes for high frequency notifications). The specific features available vary depending on the notificationType.
     *
     * This feature is currently only supported by the `ANY_OFFER_CHANGED` and `ORDER_CHANGE` notificationTypes.
     */
    public function __construct(
        public readonly string $subscriptionId,
        public readonly string $payloadVersion,
        public readonly string $destinationId,
        public readonly ?ProcessingDirective $processingDirective = null,
    ) {
    }
}
