<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Enums\GrantlessScope;
use SellingPartnerApi\Middleware\Grantless;
use SellingPartnerApi\Seller\NotificationsV1\Responses\GetSubscriptionByIdResponse;
use SellingPartnerApi\Seller\NotificationsV1\Responses\GetSubscriptionResponse;

/**
 * getSubscriptionById
 */
class GetSubscriptionById extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $subscriptionId  The identifier for the subscription that you want to get.
     * @param  string  $notificationType  The type of notification.
     *
     *  For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide).
     */
    public function __construct(
        protected string $subscriptionId,
        protected string $notificationType,
    ) {
        $this->middleware()->onRequest(new Grantless(GrantlessScope::NOTIFICATIONS));
    }

    public function resolveEndpoint(): string
    {
        return "/notifications/v1/subscriptions/{$this->notificationType}/{$this->subscriptionId}";
    }

    public function createDtoFromResponse(Response $response): GetSubscriptionByIdResponse|GetSubscriptionResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 409, 413, 415, 429, 500, 503 => GetSubscriptionByIdResponse::class,
            404 => GetSubscriptionResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
