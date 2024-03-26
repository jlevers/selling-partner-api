<?php

namespace SellingPartnerApi\Seller\DataKioskV20231115\Requests;

use Crescat\SaloonSdkGenerator\EmptyResponse;
use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\DataKioskV20231115\Responses\ErrorList;

/**
 * cancelQuery
 */
class CancelQuery extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param  string  $queryId  The identifier for the query. This identifier is unique only in combination with a selling partner account ID.
     */
    public function __construct(
        protected string $queryId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/dataKiosk/2023-11-15/queries/{$this->queryId}";
    }

    public function createDtoFromResponse(Response $response): EmptyResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => EmptyResponse::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
