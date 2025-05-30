<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\ShippingV2\Dto\CreateClaimRequest;
use SellingPartnerApi\Seller\ShippingV2\Responses\CreateClaimResponse;
use SellingPartnerApi\Seller\ShippingV2\Responses\ErrorList;

/**
 * createClaim
 */
class CreateClaim extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CreateClaimRequest  $createClaimRequest  The request schema for the CreateClaim operation
     * @param  ?string  $xAmznShippingBusinessId  Amazon shipping business to assume for this request. The default is AmazonShipping_UK.
     */
    public function __construct(
        public CreateClaimRequest $createClaimRequest,
        protected ?string $xAmznShippingBusinessId = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/shipping/v2/claims';
    }

    public function createDtoFromResponse(Response $response): CreateClaimResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            201 => CreateClaimResponse::class,
            400, 401, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->createClaimRequest->toArray();
    }

    public function defaultHeaders(): array
    {
        return array_filter(['x-amzn-shipping-business-id' => $this->xAmznShippingBusinessId]);
    }
}
