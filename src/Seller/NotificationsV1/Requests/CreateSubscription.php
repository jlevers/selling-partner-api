<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\NotificationsV1\Dto\CreateSubscriptionRequest;
use SellingPartnerApi\Seller\NotificationsV1\Responses\CreateSubscriptionResponse;

/**
 * createSubscription
 */
class CreateSubscription extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $notificationType  The type of notification.
     *
     *  For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide).
     * @param  CreateSubscriptionRequest  $createSubscriptionRequest  The request schema for the createSubscription operation.
     */
    public function __construct(
        protected string $notificationType,
        public CreateSubscriptionRequest $createSubscriptionRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/notifications/v1/subscriptions/{$this->notificationType}";
    }

    public function createDtoFromResponse(Response $response): CreateSubscriptionResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 409, 413, 415, 429, 500, 503 => CreateSubscriptionResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createSubscriptionRequest->toArray();
    }
}
