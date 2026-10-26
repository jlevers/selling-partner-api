<?php

namespace SellingPartnerApi\Seller\NotificationsV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\NotificationsV1\Dto\CreateDestinationRequest;
use SellingPartnerApi\Seller\NotificationsV1\Dto\CreateSubscriptionRequest;
use SellingPartnerApi\Seller\NotificationsV1\Dto\SendTestNotificationRequest;
use SellingPartnerApi\Seller\NotificationsV1\Requests\CreateDestination;
use SellingPartnerApi\Seller\NotificationsV1\Requests\CreateSubscription;
use SellingPartnerApi\Seller\NotificationsV1\Requests\DeleteDestination;
use SellingPartnerApi\Seller\NotificationsV1\Requests\DeleteSubscriptionById;
use SellingPartnerApi\Seller\NotificationsV1\Requests\GetDestination;
use SellingPartnerApi\Seller\NotificationsV1\Requests\GetDestinations;
use SellingPartnerApi\Seller\NotificationsV1\Requests\GetSubscription;
use SellingPartnerApi\Seller\NotificationsV1\Requests\GetSubscriptionById;
use SellingPartnerApi\Seller\NotificationsV1\Requests\GetSubscriptions;
use SellingPartnerApi\Seller\NotificationsV1\Requests\SendTestNotification;

class Api extends BaseResource
{
    /**
     * @param  array  $notificationTypes  A list of notification types to retrieve subscriptions for. Currently limited to a single notification type per request.
     *
     *  For more information about notification types, refer to the [Notifications API v1 Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).
     * @param  ?string  $payloadVersion  The version of the payload object to be used in the notification.
     * @param  ?int  $pageSize  The maximum number of subscriptions to return per page. Minimum value is 30. Maximum value is 100. Default is 30.
     * @param  ?string  $nextToken  A token to retrieve the next page of results. If this field is not empty in a response, pass its value in the next request to retrieve the next page.
     */
    public function getSubscriptions(
        array $notificationTypes,
        ?string $payloadVersion = null,
        ?int $pageSize = null,
        ?string $nextToken = null,
    ): Response {
        $request = new GetSubscriptions($notificationTypes, $payloadVersion, $pageSize, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $notificationType  The type of notification.
     *
     *  For more information about notification types, refer to the [Notifications API v1 Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).
     * @param  ?string  $payloadVersion  The version of the payload object to be used in the notification.
     */
    public function getSubscription(string $notificationType, ?string $payloadVersion = null): Response
    {
        $request = new GetSubscription($notificationType, $payloadVersion);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $notificationType  The type of notification.
     *
     *  For more information about notification types, refer to the [Notifications API v1 Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).
     * @param  CreateSubscriptionRequest  $createSubscriptionRequest  The request schema for the `createSubscription` operation.
     */
    public function createSubscription(
        string $notificationType,
        CreateSubscriptionRequest $createSubscriptionRequest,
    ): Response {
        $request = new CreateSubscription($notificationType, $createSubscriptionRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $subscriptionId  The identifier for the subscription that you want to get.
     * @param  string  $notificationType  The type of notification.
     *
     *  For more information about notification types, refer to the [Notifications API v1 Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).
     */
    public function getSubscriptionById(string $subscriptionId, string $notificationType): Response
    {
        $request = new GetSubscriptionById($subscriptionId, $notificationType);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $subscriptionId  The identifier for the subscription that you want to delete.
     * @param  string  $notificationType  The type of notification.
     *
     *  For more information about notification types, refer to the [Notifications API v1 Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).
     */
    public function deleteSubscriptionById(string $subscriptionId, string $notificationType): Response
    {
        $request = new DeleteSubscriptionById($subscriptionId, $notificationType);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $notificationType  The type of notification.
     *
     *  For more information about notification types, refer to the [Notifications API v1 Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).
     * @param  SendTestNotificationRequest  $sendTestNotificationRequest  The request schema for the `sendTestNotification` operation.
     */
    public function sendTestNotification(
        string $notificationType,
        SendTestNotificationRequest $sendTestNotificationRequest,
    ): Response {
        $request = new SendTestNotification($notificationType, $sendTestNotificationRequest);

        return $this->connector->send($request);
    }

    public function getDestinations(): Response
    {
        $request = new GetDestinations;

        return $this->connector->send($request);
    }

    /**
     * @param  CreateDestinationRequest  $createDestinationRequest  The request schema for the `createDestination` operation.
     */
    public function createDestination(CreateDestinationRequest $createDestinationRequest): Response
    {
        $request = new CreateDestination($createDestinationRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $destinationId  The identifier generated when you created the destination.
     */
    public function getDestination(string $destinationId): Response
    {
        $request = new GetDestination($destinationId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $destinationId  The identifier for the destination that you want to delete.
     */
    public function deleteDestination(string $destinationId): Response
    {
        $request = new DeleteDestination($destinationId);

        return $this->connector->send($request);
    }
}
