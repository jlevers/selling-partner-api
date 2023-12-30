<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses\CustomerInvoiceList;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses\ErrorList;

/**
 * getCustomerInvoices
 */
class GetCustomerInvoices extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $createdAfter Orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  string  $createdBefore Orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?string  $shipFromPartyId The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses.
     * @param  ?int  $limit The limit to the number of records returned
     * @param  ?string  $sortOrder Sort ASC or DESC by order creation date.
     * @param  ?string  $nextToken Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call.
     */
    public function __construct(
        protected string $createdAfter,
        protected string $createdBefore,
        protected ?string $shipFromPartyId = null,
        protected ?int $limit = null,
        protected ?string $sortOrder = null,
        protected ?string $nextToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'createdAfter' => $this->createdAfter,
            'createdBefore' => $this->createdBefore,
            'shipFromPartyId' => $this->shipFromPartyId,
            'limit' => $this->limit,
            'sortOrder' => $this->sortOrder,
            'nextToken' => $this->nextToken,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/vendor/directFulfillment/shipping/2021-12-28/customerInvoices';
    }

    public function createDtoFromResponse(Response $response): CustomerInvoiceList|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => CustomerInvoiceList::class,
            400, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
