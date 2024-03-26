<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\EasyShipV20220323\Responses\ErrorList;
use SellingPartnerApi\Seller\EasyShipV20220323\Responses\Package;

/**
 * getScheduledPackage
 */
class GetScheduledPackage extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $amazonOrderId  An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship.
     * @param  string  $marketplaceId  An identifier for the marketplace in which the seller is selling.
     */
    public function __construct(
        protected string $amazonOrderId,
        protected string $marketplaceId,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['amazonOrderId' => $this->amazonOrderId, 'marketplaceId' => $this->marketplaceId]);
    }

    public function resolveEndpoint(): string
    {
        return '/easyShip/2022-03-23/package';
    }

    public function createDtoFromResponse(Response $response): Package|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => Package::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
