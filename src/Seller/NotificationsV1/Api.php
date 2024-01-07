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
     * @param  string  $notificationType The type of notification.
     *
     *  For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide).
     */
    public function getSubscription(string $notificationType): Response
    {
        return $this->connector->send(new GetSubscription($notificationType));
    }

    /**
     * @param  string  $notificationType The type of notification.
     *
     *  For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide).
     * @param  CreateSubscriptionRequest  $createSubscriptionRequest The request schema for the createSubscription operation.
     */
    public function createSubscription(
        string $notificationType,
        CreateSubscriptionRequest $createSubscriptionRequest,
    ): Response {
        return $this->connector->send(new CreateSubscription($notificationType, $createSubscriptionRequest));
    }

    /**
     * @param  string  $subscriptionId The identifier for the subscription that you want to get.
     * @param  string  $notificationType The type of notification.
     *
     *  For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide).
     */
    public function getSubscriptionById(string $subscriptionId, string $notificationType): Response
    {
        return $this->connector->send(new GetSubscriptionById($subscriptionId, $notificationType));
    }

    /**
     * @param  string  $subscriptionId The identifier for the subscription that you want to delete.
     * @param  string  $notificationType The type of notification.
     *
     *  For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide).
     */
    public function deleteSubscriptionById(string $subscriptionId, string $notificationType): Response
    {
        return $this->connector->send(new DeleteSubscriptionById($subscriptionId, $notificationType));
    }

    public function getDestinations(): Response
    {
        return $this->connector->send(new GetDestinations());
    }

    /**
     * @param  CreateDestinationRequest  $createDestinationRequest The request schema for the createDestination operation.
     */
    public function createDestination(CreateDestinationRequest $createDestinationRequest): Response
    {
        return $this->connector->send(new CreateDestination($createDestinationRequest));
    }

    /**
     * @param  string  $destinationId The identifier generated when you created the destination.
     */
    public function getDestination(string $destinationId): Response
    {
        return $this->connector->send(new GetDestination($destinationId));
    }

    /**
     * @param  string  $destinationId The identifier for the destination that you want to delete.
     */
    public function deleteDestination(string $destinationId): Response
    {
        return $this->connector->send(new DeleteDestination($destinationId));
    }
}
