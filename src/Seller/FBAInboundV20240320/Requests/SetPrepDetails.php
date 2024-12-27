<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\SetPrepDetailsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\SetPrepDetailsResponse;

/**
 * setPrepDetails
 */
class SetPrepDetails extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  SetPrepDetailsRequest  $setPrepDetailsRequest  The `setPrepDetails` request.
     */
    public function __construct(
        public SetPrepDetailsRequest $setPrepDetailsRequest,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/inbound/fba/2024-03-20/items/prepDetails';
    }

    public function createDtoFromResponse(Response $response): SetPrepDetailsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202 => SetPrepDetailsResponse::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->setPrepDetailsRequest->toArray();
    }
}
