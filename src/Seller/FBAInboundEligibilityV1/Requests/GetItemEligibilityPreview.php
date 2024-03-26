<?php

namespace SellingPartnerApi\Seller\FBAInboundEligibilityV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAInboundEligibilityV1\Responses\GetItemEligibilityPreviewResponse;

/**
 * getItemEligibilityPreview
 */
class GetItemEligibilityPreview extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $asin  The ASIN of the item for which you want an eligibility preview.
     * @param  string  $program  The program that you want to check eligibility against.
     * @param  ?array  $marketplaceIds  The identifier for the marketplace in which you want to determine eligibility. Required only when program=INBOUND.
     */
    public function __construct(
        protected string $asin,
        protected string $program,
        protected ?array $marketplaceIds = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['asin' => $this->asin, 'program' => $this->program, 'marketplaceIds' => $this->marketplaceIds]);
    }

    public function resolveEndpoint(): string
    {
        return '/fba/inbound/v1/eligibility/itemPreview';
    }

    public function createDtoFromResponse(Response $response): GetItemEligibilityPreviewResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetItemEligibilityPreviewResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
