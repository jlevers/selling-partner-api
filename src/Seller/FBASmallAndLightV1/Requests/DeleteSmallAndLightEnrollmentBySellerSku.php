<?php

namespace SellingPartnerApi\Seller\FBASmallAndLightV1\Requests;

use Crescat\SaloonSdkGenerator\EmptyResponse;
use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBASmallAndLightV1\Responses\ErrorList;

/**
 * deleteSmallAndLightEnrollmentBySellerSKU
 */
class DeleteSmallAndLightEnrollmentBySellerSku extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param  string  $sellerSku  The seller SKU that identifies the item.
     * @param  array  $marketplaceIds  The marketplace in which to remove the item from the Small and Light program. Note: Accepts a single marketplace only.
     */
    public function __construct(
        protected string $sellerSku,
        protected array $marketplaceIds,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceIds' => $this->marketplaceIds]);
    }

    public function resolveEndpoint(): string
    {
        return "/fba/smallAndLight/v1/enrollments/{$this->sellerSku}";
    }

    public function createDtoFromResponse(Response $response): EmptyResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            204 => EmptyResponse::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
