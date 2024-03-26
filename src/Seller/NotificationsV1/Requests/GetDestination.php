<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Enums\GrantlessScope;
use SellingPartnerApi\Middleware\Grantless;
use SellingPartnerApi\Seller\NotificationsV1\Responses\GetDestinationResponse;

/**
 * getDestination
 */
class GetDestination extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $destinationId  The identifier generated when you created the destination.
     */
    public function __construct(
        protected string $destinationId,
    ) {
        $this->middleware()->onRequest(new Grantless(GrantlessScope::NOTIFICATIONS));
    }

    public function resolveEndpoint(): string
    {
        return "/notifications/v1/destinations/{$this->destinationId}";
    }

    public function createDtoFromResponse(Response $response): GetDestinationResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 409, 413, 415, 429, 500, 503 => GetDestinationResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
