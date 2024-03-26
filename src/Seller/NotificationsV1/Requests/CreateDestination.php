<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Enums\GrantlessScope;
use SellingPartnerApi\Middleware\Grantless;
use SellingPartnerApi\Seller\NotificationsV1\Dto\CreateDestinationRequest;
use SellingPartnerApi\Seller\NotificationsV1\Responses\CreateDestinationResponse;

/**
 * createDestination
 */
class CreateDestination extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CreateDestinationRequest  $createDestinationRequest  The request schema for the createDestination operation.
     */
    public function __construct(
        public CreateDestinationRequest $createDestinationRequest,
    ) {
        $this->middleware()->onRequest(new Grantless(GrantlessScope::NOTIFICATIONS));
    }

    public function resolveEndpoint(): string
    {
        return '/notifications/v1/destinations';
    }

    public function createDtoFromResponse(Response $response): CreateDestinationResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 409, 413, 415, 429, 500, 503 => CreateDestinationResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createDestinationRequest->toArray();
    }
}
