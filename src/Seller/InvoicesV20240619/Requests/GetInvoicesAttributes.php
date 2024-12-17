<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\InvoicesV20240619\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\InvoicesV20240619\Responses\ErrorList;
use SellingPartnerApi\Seller\InvoicesV20240619\Responses\GetInvoicesAttributesResponse;

/**
 * getInvoicesAttributes
 */
class GetInvoicesAttributes extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $marketplaceId  The marketplace identifier.
     */
    public function __construct(
        protected string $marketplaceId,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/tax/invoices/2024-06-19/attributes';
    }

    public function createDtoFromResponse(Response $response): GetInvoicesAttributesResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetInvoicesAttributesResponse::class,
            400, 401, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceId' => $this->marketplaceId]);
    }
}
