<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\TransfersV20240601\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\TransfersV20240601\Responses\ErrorList;
use SellingPartnerApi\Seller\TransfersV20240601\Responses\GetPaymentMethodsResponse;

/**
 * getPaymentMethods
 */
class GetPaymentMethods extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $marketplaceId  The identifier of the marketplace from which you want to retrieve payment methods. For the list of possible marketplace identifiers, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?array  $paymentMethodTypes  A comma-separated list of the payment method types you want to include in the response.
     */
    public function __construct(
        protected string $marketplaceId,
        protected ?array $paymentMethodTypes = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/finances/transfers/2024-06-01/paymentMethods';
    }

    public function createDtoFromResponse(Response $response): GetPaymentMethodsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetPaymentMethodsResponse::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceId' => $this->marketplaceId, 'paymentMethodTypes' => $this->paymentMethodTypes]);
    }
}
