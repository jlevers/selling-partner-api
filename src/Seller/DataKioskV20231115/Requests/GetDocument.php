<?php

namespace SellingPartnerApi\Seller\DataKioskV20231115\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\DataKioskV20231115\Responses\ErrorList;
use SellingPartnerApi\Seller\DataKioskV20231115\Responses\GetDocumentResponse;

/**
 * getDocument
 */
class GetDocument extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $documentId  The identifier for the Data Kiosk document.
     */
    public function __construct(
        protected string $documentId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/dataKiosk/2023-11-15/documents/{$this->documentId}";
    }

    public function createDtoFromResponse(Response $response): GetDocumentResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetDocumentResponse::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
