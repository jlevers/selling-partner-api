<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Dto\ListOffersRequest;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Responses\ErrorList;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Responses\ListOffersResponse;

/**
 * listOffers
 */
class ListOffers extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  ListOffersRequest  $listOffersRequest  The request body for the `listOffers` operation.
     */
    public function __construct(
        public ListOffersRequest $listOffersRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/replenishment/2022-11-07/offers/search';
    }

    public function createDtoFromResponse(Response $response): ListOffersResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ListOffersResponse::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->listOffersRequest->toArray();
    }
}
