<?php

namespace SellingPartnerApi\Seller\OrdersV20260101;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\OrdersV20260101\Requests\GetOrder;
use SellingPartnerApi\Seller\OrdersV20260101\Requests\SearchOrders;

class Api extends BaseResource
{
    /**
     * @param  ?\DateTimeInterface  $createdAfter  The response includes orders created at or after this time. The date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) format.
     *
     * **Note**: You must provide exactly one of `createdAfter` and `lastUpdatedAfter` in your request. If `createdAfter` is provided, neither `lastUpdatedAfter` nor `lastUpdatedBefore` may be provided.
     * @param  ?\DateTimeInterface  $createdBefore  The response includes orders created at or before this time. The date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) format.
     *
     * **Note**: If you include `createdAfter` in the request, `createdBefore` is optional, and if provided must be equal to or after the `createdAfter` date and at least two minutes before the time of the request. If `createdBefore` is provided, neither `lastUpdatedAfter` nor `lastUpdatedBefore` may be provided.
     * @param  ?\DateTimeInterface  $lastUpdatedAfter  The response includes orders updated at or after this time. An update is defined as any change made by Amazon or by the seller, including an update to the order status. The date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) format.
     *
     * **Note**: You must provide exactly one of `createdAfter` and `lastUpdatedAfter`. If `lastUpdatedAfter` is provided, neither `createdAfter` nor `createdBefore` may be provided.
     * @param  ?\DateTimeInterface  $lastUpdatedBefore  The response includes orders updated at or before this time. An update is defined as any change made by Amazon or by the seller, including an update to the order status. The date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) format.
     *
     * **Note**: If you include `lastUpdatedAfter` in the request, `lastUpdatedBefore` is optional, and if provided must be equal to or after the `lastUpdatedAfter` date and at least two minutes before the time of the request. If `lastUpdatedBefore` is provided, neither `createdAfter` nor `createdBefore` may be provided.
     * @param  ?array  $fulfillmentStatuses  A list of `FulfillmentStatus` values you can use to filter the results.
     * @param  ?array  $marketplaceIds  The response includes orders that were placed in marketplaces you include in this list.
     *
     * Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a complete list of `marketplaceId` values.
     * @param  ?array  $fulfilledBy  The response includes orders that are fulfilled by the parties that you include in this list.
     * @param  ?int  $maxResultsPerPage  The maximum number of orders that can be returned per page. The value must be between 1 and 100. **Default:** 100.
     * @param  ?string  $paginationToken  Pagination occurs when a request produces a response that exceeds the `maxResultsPerPage`. This means that the response is divided into individual pages. To retrieve the next page, you must pass the `nextToken` value as the `paginationToken` query parameter in the next request. You will not receive a `nextToken` value on the last page.
     * @param  ?array  $includedData  A list of datasets to include in the response.
     */
    public function searchOrders(
        ?\DateTimeInterface $createdAfter = null,
        ?\DateTimeInterface $createdBefore = null,
        ?\DateTimeInterface $lastUpdatedAfter = null,
        ?\DateTimeInterface $lastUpdatedBefore = null,
        ?array $fulfillmentStatuses = null,
        ?array $marketplaceIds = null,
        ?array $fulfilledBy = null,
        ?int $maxResultsPerPage = null,
        ?string $paginationToken = null,
        ?array $includedData = null,
    ): Response {
        $request = new SearchOrders($createdAfter, $createdBefore, $lastUpdatedAfter, $lastUpdatedBefore, $fulfillmentStatuses, $marketplaceIds, $fulfilledBy, $maxResultsPerPage, $paginationToken, $includedData);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  An Amazon-defined order identifier.
     * @param  ?array  $includedData  A list of datasets to include in the response.
     */
    public function getOrder(string $orderId, ?array $includedData = null): Response
    {
        $request = new GetOrder($orderId, $includedData);

        return $this->connector->send($request);
    }
}
