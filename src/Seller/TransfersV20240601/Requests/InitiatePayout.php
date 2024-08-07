<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\TransfersV20240601\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\TransfersV20240601\Dto\InitiatePayoutRequest;
use SellingPartnerApi\Seller\TransfersV20240601\Responses\ErrorList;
use SellingPartnerApi\Seller\TransfersV20240601\Responses\InitiatePayoutResponse;

/**
 * initiatePayout
 */
class InitiatePayout extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  InitiatePayoutRequest  $initiatePayoutRequest  The request schema for the `initiatePayout` operation.
     */
    public function __construct(
        public InitiatePayoutRequest $initiatePayoutRequest,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/finances/transfers/2024-06-01/payouts';
    }

    public function createDtoFromResponse(Response $response): InitiatePayoutResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => InitiatePayoutResponse::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->initiatePayoutRequest->toArray();
    }
}
