<?php

namespace SellingPartnerApi\Seller\FBASmallAndLightV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\FBASmallAndLightV1\Dto\SmallAndLightFeePreviewRequest;
use SellingPartnerApi\Seller\FBASmallAndLightV1\Responses\ErrorList;
use SellingPartnerApi\Seller\FBASmallAndLightV1\Responses\SmallAndLightFeePreviews;

/**
 * getSmallAndLightFeePreview
 */
class GetSmallAndLightFeePreview extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  SmallAndLightFeePreviewRequest  $smallAndLightFeePreviewRequest  Request schema for submitting items for which to retrieve fee estimates.
     */
    public function __construct(
        public SmallAndLightFeePreviewRequest $smallAndLightFeePreviewRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/fba/smallAndLight/v1/feePreviews';
    }

    public function createDtoFromResponse(Response $response): SmallAndLightFeePreviews|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => SmallAndLightFeePreviews::class,
            400, 401, 403, 404, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->smallAndLightFeePreviewRequest->toArray();
    }
}
