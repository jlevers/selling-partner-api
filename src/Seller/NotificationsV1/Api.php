<?php

namespace SellingPartnerApi\Seller\NotificationsV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\NotificationsV1\Dto\CreateDestinationRequest;
use SellingPartnerApi\Seller\NotificationsV1\Dto\CreateSubscriptionRequest;
use SellingPartnerApi\Seller\NotificationsV1\Requests\CreateDestination;
use SellingPartnerApi\Seller\NotificationsV1\Requests\CreateSubscription;
use SellingPartnerApi\Seller\NotificationsV1\Requests\DeleteDestination;
use SellingPartnerApi\Seller\NotificationsV1\Requests\DeleteSubscriptionById;
use SellingPartnerApi\Seller\NotificationsV1\Requests\GetDestination;
use SellingPartnerApi\Seller\NotificationsV1\Requests\GetDestinations;
use SellingPartnerApi\Seller\NotificationsV1\Requests\GetSubscription;
use SellingPartnerApi\Seller\NotificationsV1\Requests\GetSubscriptionById;

class Api extends BaseResource
{
    /**
     * @param  string  $notificationType  The type of notification.
     *
     *  For more information about notification types, refer to [Notification Type Values](https://developer-docs.amazon.com/sp-api/docs/notification-type-values).
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
     *  For more information about notification types, refer to [Notification Type Values](https://developer-docs.amazon.com/sp-api/docs/notification-type-values).
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
     *  For more information about notification types, refer to [Notification Type Values](https://developer-docs.amazon.com/sp-api/docs/notification-type-values).
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
     *  For more information about notification types, refer to [Notification Type Values](https://developer-docs.amazon.com/sp-api/docs/notification-type-values).
     */
    public function deleteSubscriptionById(string $subscriptionId, string $notificationType): Response
    {
        $request = new DeleteSubscriptionById($subscriptionId, $notificationType);

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
