<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\PostContentDocumentRequest;
use SellingPartnerApi\Seller\APlusContentV20201101\Responses\ErrorList;
use SellingPartnerApi\Seller\APlusContentV20201101\Responses\ValidateContentDocumentAsinRelationsResponse;

/**
 * validateContentDocumentAsinRelations
 */
class ValidateContentDocumentAsinRelations extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $marketplaceId  The identifier for the marketplace where the A+ Content is published.
     * @param  ?array  $asinSet  The set of ASINs.
     */
    public function __construct(
        public PostContentDocumentRequest $postContentDocumentRequest,
        protected string $marketplaceId,
        protected ?array $asinSet = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceId' => $this->marketplaceId, 'asinSet' => $this->asinSet]);
    }

    public function resolveEndpoint(): string
    {
        return '/aplus/2020-11-01/contentAsinValidations';
    }

    public function createDtoFromResponse(Response $response): ValidateContentDocumentAsinRelationsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ValidateContentDocumentAsinRelationsResponse::class,
            400, 401, 403, 404, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->postContentDocumentRequest->toArray();
    }
}
