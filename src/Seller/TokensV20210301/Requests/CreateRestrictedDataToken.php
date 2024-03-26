<?php

namespace SellingPartnerApi\Seller\TokensV20210301\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\TokensV20210301\Dto\CreateRestrictedDataTokenRequest;
use SellingPartnerApi\Seller\TokensV20210301\Responses\CreateRestrictedDataTokenResponse;
use SellingPartnerApi\Seller\TokensV20210301\Responses\ErrorList;

/**
 * createRestrictedDataToken
 */
class CreateRestrictedDataToken extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CreateRestrictedDataTokenRequest  $createRestrictedDataTokenRequest  The request schema for the createRestrictedDataToken operation.
     */
    public function __construct(
        public CreateRestrictedDataTokenRequest $createRestrictedDataTokenRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/tokens/2021-03-01/restrictedDataToken';
    }

    public function createDtoFromResponse(Response $response): CreateRestrictedDataTokenResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => CreateRestrictedDataTokenResponse::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createRestrictedDataTokenRequest->toArray();
    }
}
