<?php

namespace SellingPartnerApi\Seller\FeedsV20210630\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\FeedsV20210630\Dto\CreateFeedDocumentSpecification;
use SellingPartnerApi\Seller\FeedsV20210630\Responses\CreateFeedDocumentResponse;
use SellingPartnerApi\Seller\FeedsV20210630\Responses\ErrorList;

/**
 * createFeedDocument
 */
class CreateFeedDocument extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CreateFeedDocumentSpecification  $createFeedDocumentSpecification  Specifies the content type for the createFeedDocument operation.
     */
    public function __construct(
        public CreateFeedDocumentSpecification $createFeedDocumentSpecification,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/feeds/2021-06-30/documents';
    }

    public function createDtoFromResponse(Response $response): CreateFeedDocumentResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            201 => CreateFeedDocumentResponse::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createFeedDocumentSpecification->toArray();
    }
}
