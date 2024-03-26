<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\NotificationsV1\Responses\GetSubscriptionResponse;

/**
 * getSubscription
 */
class GetSubscription extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $notificationType  The type of notification.
     *
     *  For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide).
     */
    public function __construct(
        protected string $notificationType,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/notifications/v1/subscriptions/{$this->notificationType}";
    }

    public function createDtoFromResponse(Response $response): GetSubscriptionResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 413, 415, 429, 500, 503 => GetSubscriptionResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
