<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Middleware\RestrictedDataToken;
use SellingPartnerApi\Seller\EasyShipV20220323\Dto\CreateScheduledPackagesRequest;
use SellingPartnerApi\Seller\EasyShipV20220323\Responses\CreateScheduledPackagesResponse;
use SellingPartnerApi\Seller\EasyShipV20220323\Responses\ErrorList;

/**
 * createScheduledPackageBulk
 */
class CreateScheduledPackageBulk extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CreateScheduledPackagesRequest  $createScheduledPackagesRequest  The request body for the POST /easyShip/2022-03-23/packages/bulk API.
     */
    public function __construct(
        public CreateScheduledPackagesRequest $createScheduledPackagesRequest,
    ) {
        $rdtMiddleware = new RestrictedDataToken('/easyShip/2022-03-23/packages/bulk', 'POST', []);
        $this->middleware()->onRequest($rdtMiddleware);
    }

    public function resolveEndpoint(): string
    {
        return '/easyShip/2022-03-23/packages/bulk';
    }

    public function createDtoFromResponse(Response $response): CreateScheduledPackagesResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => CreateScheduledPackagesResponse::class,
            400, 401, 403, 404, 429, 415, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createScheduledPackagesRequest->toArray();
    }
}
