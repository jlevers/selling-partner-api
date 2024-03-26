<?php

namespace SellingPartnerApi\Seller\DataKioskV20231115\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\DataKioskV20231115\Dto\CreateQuerySpecification;
use SellingPartnerApi\Seller\DataKioskV20231115\Responses\CreateQueryResponse;
use SellingPartnerApi\Seller\DataKioskV20231115\Responses\ErrorList;

/**
 * createQuery
 */
class CreateQuery extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CreateQuerySpecification  $createQuerySpecification  Information required to create the query.
     */
    public function __construct(
        public CreateQuerySpecification $createQuerySpecification,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/dataKiosk/2023-11-15/queries';
    }

    public function createDtoFromResponse(Response $response): CreateQueryResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202 => CreateQueryResponse::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createQuerySpecification->toArray();
    }
}
