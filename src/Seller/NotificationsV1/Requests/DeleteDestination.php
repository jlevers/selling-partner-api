<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Enums\GrantlessScope;
use SellingPartnerApi\Middleware\Grantless;
use SellingPartnerApi\Seller\NotificationsV1\Responses\DeleteDestinationResponse;

/**
 * deleteDestination
 */
class DeleteDestination extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param  string  $destinationId  The identifier for the destination that you want to delete.
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

    public function createDtoFromResponse(Response $response): DeleteDestinationResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 409, 413, 415, 429, 500, 503 => DeleteDestinationResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
