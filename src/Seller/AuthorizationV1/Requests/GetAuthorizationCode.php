<?php

namespace SellingPartnerApi\Seller\AuthorizationV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Enums\GrantlessScope;
use SellingPartnerApi\Middleware\Grantless;
use SellingPartnerApi\Seller\AuthorizationV1\Responses\GetAuthorizationCodeResponse;

/**
 * getAuthorizationCode
 */
class GetAuthorizationCode extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $sellingPartnerId  The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore.
     * @param  string  $developerId  Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central.
     * @param  string  $mwsAuthToken  The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore.
     */
    public function __construct(
        protected string $sellingPartnerId,
        protected string $developerId,
        protected string $mwsAuthToken,
    ) {
        $this->middleware()->onRequest(new Grantless(GrantlessScope::TOKEN_MIGRATION));
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'sellingPartnerId' => $this->sellingPartnerId,
            'developerId' => $this->developerId,
            'mwsAuthToken' => $this->mwsAuthToken,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/authorization/v1/authorizationCode';
    }

    public function createDtoFromResponse(Response $response): GetAuthorizationCodeResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 413, 415, 429, 500, 503 => GetAuthorizationCodeResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
