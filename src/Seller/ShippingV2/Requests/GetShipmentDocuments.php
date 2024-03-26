<?php

namespace SellingPartnerApi\Seller\ShippingV2\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ShippingV2\Responses\ErrorList;
use SellingPartnerApi\Seller\ShippingV2\Responses\GetShipmentDocumentsResponse;

/**
 * getShipmentDocuments
 */
class GetShipmentDocuments extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $shipmentId  The shipment identifier originally returned by the purchaseShipment operation.
     * @param  string  $packageClientReferenceId  The package client reference identifier originally provided in the request body parameter for the getRates operation.
     * @param  ?string  $format  The file format of the document. Must be one of the supported formats returned by the getRates operation.
     * @param  ?float  $dpi  The resolution of the document (for example, 300 means 300 dots per inch). Must be one of the supported resolutions returned in the response to the getRates operation.
     */
    public function __construct(
        protected string $shipmentId,
        protected string $packageClientReferenceId,
        protected ?string $format = null,
        protected ?float $dpi = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['packageClientReferenceId' => $this->packageClientReferenceId, 'format' => $this->format, 'dpi' => $this->dpi]);
    }

    public function resolveEndpoint(): string
    {
        return "/shipping/v2/shipments/{$this->shipmentId}/documents";
    }

    public function createDtoFromResponse(Response $response): GetShipmentDocumentsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetShipmentDocumentsResponse::class,
            400, 401, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
