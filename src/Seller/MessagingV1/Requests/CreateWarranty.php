<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MessagingV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\MessagingV1\Dto\CreateWarrantyRequest;
use SellingPartnerApi\Seller\MessagingV1\Responses\CreateWarrantyResponse;

/**
 * CreateWarranty
 */
class CreateWarranty extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $amazonOrderId  An Amazon order identifier. This identifies the order for which a message is sent.
     * @param  CreateWarrantyRequest  $createWarrantyRequest  The request schema for the createWarranty operation.
     * @param  array  $marketplaceIds  A marketplace identifier. This identifies the marketplace in which the order was placed. You can only specify one marketplace.
     */
    public function __construct(
        protected string $amazonOrderId,
        public CreateWarrantyRequest $createWarrantyRequest,
        protected array $marketplaceIds,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/messaging/v1/orders/{$this->amazonOrderId}/messages/warranty";
    }

    public function createDtoFromResponse(Response $response): CreateWarrantyResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            201, 400, 403, 404, 413, 415, 429, 500, 503 => CreateWarrantyResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->createWarrantyRequest->toArray();
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceIds' => $this->marketplaceIds]);
    }
}
