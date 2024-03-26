<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ProductFeesV0\Responses\GetMyFeesEstimatesErrorList;
use SellingPartnerApi\Seller\ProductFeesV0\Responses\GetMyFeesEstimatesResponse;

/**
 * getMyFeesEstimates
 */
class GetMyFeesEstimates extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FeesEstimateByIdRequest[]  $getMyFeesEstimatesRequest  Request for estimated fees for a list of products.
     */
    public function __construct(
        public array $getMyFeesEstimatesRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/products/fees/v0/feesEstimate';
    }

    public function createDtoFromResponse(Response $response): GetMyFeesEstimatesResponse|GetMyFeesEstimatesErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetMyFeesEstimatesResponse::class,
            400, 401, 403, 404, 429, 500, 503 => GetMyFeesEstimatesErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->getMyFeesEstimatesRequest;
    }
}
