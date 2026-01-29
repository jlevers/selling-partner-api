<?php

namespace SellingPartnerApi\Seller\FinancesV20240619;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FinancesV20240619\Requests\ListTransactions;

class Api extends BaseResource
{
    /**
     * @param  ?\DateTimeInterface  $postedAfter  The response includes financial events posted on or after this date. This date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. The date-time must be more than two minutes before the time of the request.
     *
     * This field is required if you do not specify a related identifier.
     * @param  ?\DateTimeInterface  $postedBefore  The response includes financial events posted before (but not on) this date. This date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     *
     * The date-time must be later than `PostedAfter` and more than two minutes before the request was submitted. If `PostedAfter` and `PostedBefore` are more than 180 days apart, the response is empty.
     *
     * **Default:** Two minutes before the time of the request.
     * @param  ?string  $marketplaceId  The identifier of the marketplace from which you want to retrieve transactions. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?string  $transactionStatus  The status of the transaction.
     *
     * **Possible values:**
     *
     * * `DEFERRED`: the transaction is currently deferred.
     * * `RELEASED`: the transaction is currently released.
     * * `DEFERRED_RELEASED`: the transaction was deferred in the past, but is now released. The status of a deferred transaction is updated to `DEFERRED_RELEASED` when the transaction is released.
     * @param  ?string  $relatedIdentifierName  The name of the `relatedIdentifier`.
     *
     * **Possible values:**
     *
     * * `FINANCIAL_EVENT_GROUP_ID`: the financial event group ID associated with the transaction.
     *
     * * `ORDER_ID`: the order ID associated with the transaction.
     *
     * **Note:**
     *
     *  FINANCIAL_EVENT_GROUP_ID and ORDER_ID are the only `relatedIdentifier` with filtering capabilities at the moment. While other `relatedIdentifier` values will be included in the response when available, they cannot be used for filtering purposes.
     * @param  ?string  $relatedIdentifierValue  The value of the `relatedIdentifier`.
     * @param  ?string  $nextToken  The response includes `nextToken` when the number of results exceeds the specified `pageSize` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
     */
    public function listTransactions(
        ?\DateTimeInterface $postedAfter = null,
        ?\DateTimeInterface $postedBefore = null,
        ?string $marketplaceId = null,
        ?string $transactionStatus = null,
        ?string $relatedIdentifierName = null,
        ?string $relatedIdentifierValue = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListTransactions($postedAfter, $postedBefore, $marketplaceId, $transactionStatus, $relatedIdentifierName, $relatedIdentifierValue, $nextToken);

        return $this->connector->send($request);
    }
}
