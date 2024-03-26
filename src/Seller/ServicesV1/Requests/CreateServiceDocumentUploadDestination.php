<?php

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ServicesV1\Dto\ServiceUploadDocument;
use SellingPartnerApi\Seller\ServicesV1\Responses\CreateServiceDocumentUploadDestination as CreateServiceDocumentUploadDestination1;

/**
 * createServiceDocumentUploadDestination
 */
class CreateServiceDocumentUploadDestination extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  ServiceUploadDocument  $serviceUploadDocument  Input for to be uploaded document.
     */
    public function __construct(
        public ServiceUploadDocument $serviceUploadDocument,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/service/v1/documents';
    }

    public function createDtoFromResponse(Response $response): CreateServiceDocumentUploadDestination1
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 413, 415, 422, 429, 500, 503 => CreateServiceDocumentUploadDestination1::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->serviceUploadDocument->toArray();
    }
}
