<?php

namespace SellingPartnerApi\Seller\UploadsV20201101\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\UploadsV20201101\Responses\CreateUploadDestinationResponse;

/**
 * createUploadDestinationForResource
 */
class CreateUploadDestinationForResource extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $resource  The resource for the upload destination that you are creating. For example, if you are creating an upload destination for the createLegalDisclosure operation of the Messaging API, the `{resource}` would be `/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure`, and the entire path would be `/uploads/2020-11-01/uploadDestinations/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure`. If you are creating an upload destination for an Aplus content document, the `{resource}` would be `aplus/2020-11-01/contentDocuments` and the path would be `/uploads/v1/uploadDestinations/aplus/2020-11-01/contentDocuments`.
     * @param  array  $marketplaceIds  A list of marketplace identifiers. This specifies the marketplaces where the upload will be available. Only one marketplace can be specified.
     * @param  string  $contentMd5  An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit.
     * @param  ?string  $contentType  The content type of the file to be uploaded.
     */
    public function __construct(
        protected string $resource,
        protected array $marketplaceIds,
        protected string $contentMd5,
        protected ?string $contentType = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceIds' => $this->marketplaceIds, 'contentMD5' => $this->contentMd5, 'contentType' => $this->contentType]);
    }

    public function resolveEndpoint(): string
    {
        return "/uploads/2020-11-01/uploadDestinations/{$this->resource}";
    }

    public function createDtoFromResponse(Response $response): CreateUploadDestinationResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            201, 400, 403, 404, 413, 415, 429, 500, 503 => CreateUploadDestinationResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
