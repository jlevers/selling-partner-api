<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\CreateFulfillmentReturnRequest;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Responses\CreateFulfillmentReturnResponse;

/**
 * createFulfillmentReturn
 */
class CreateFulfillmentReturn extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  string  $sellerFulfillmentOrderId  An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct SellerFulfillmentOrderId value based on the buyer's request to return items.
     * @param  CreateFulfillmentReturnRequest  $createFulfillmentReturnRequest  The createFulfillmentReturn operation creates a fulfillment return for items that were fulfilled using the createFulfillmentOrder operation. For calls to createFulfillmentReturn, you must include ReturnReasonCode values returned by a previous call to the listReturnReasonCodes operation.
     */
    public function __construct(
        protected string $sellerFulfillmentOrderId,
        public CreateFulfillmentReturnRequest $createFulfillmentReturnRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/fba/outbound/2020-07-01/fulfillmentOrders/{$this->sellerFulfillmentOrderId}/return";
    }

    public function createDtoFromResponse(Response $response): CreateFulfillmentReturnResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => CreateFulfillmentReturnResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createFulfillmentReturnRequest->toArray();
    }
}
