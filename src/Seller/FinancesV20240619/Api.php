<?php

namespace SellingPartnerApi\Seller\FinancesV20240619;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FinancesV20240619\Requests\ListBalances;
use SellingPartnerApi\Seller\FinancesV20240619\Requests\ListSummary;
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
     * @param  ?string  $marketplaceId  The identifier of the marketplace from which you want to retrieve transactions. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for a marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
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
     * * `SETTLEMENT_ID`: the settlement group ID associated with the transaction.
     *
     * **Note:**
     *
     * `FINANCIAL_EVENT_GROUP_ID`, `ORDER_ID`, and `SETTLEMENT_ID` are the only `relatedIdentifier` with filtering capabilities at the moment. While other `relatedIdentifier` values will be included in the response when available, they cannot be used for filtering purposes.
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

    /**
     * @param  ?array  $marketplaceIds  The marketplaces from which to retrieve balances. If omitted, balances from all applicable marketplaces may be returned. To find the marketplace ID for a region, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?string  $balanceType  The type of balance to include in the response. If omitted, all balance types may be included in the response.
     *
     * **Possible values:** `AVAILABLE`, `RESERVED`, `TOTAL`, `DEFERRED`, `ACCOUNT_LEVEL_RESERVE`
     * @param  ?string  $accountType  The type of account to include in the response.
     * @param  ?\DateTimeInterface  $asOfDate  The date from which you want to retrieve balances. If provided, the response includes historical balances at the specified date. The value must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date format. If omitted, the point in time balance is provided.
     * @param  ?string  $nextToken  A token that you use to retrieve subsequent pages of results. When there are more than 500 results available, the response will include a `nextToken` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. Repeat this process until the `nextToken` value is null to retrieve all results.
     */
    public function listBalances(
        ?array $marketplaceIds = null,
        ?string $balanceType = null,
        ?string $accountType = null,
        ?\DateTimeInterface $asOfDate = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListBalances($marketplaceIds, $balanceType, $accountType, $asOfDate, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  ?array  $marketplaceIds  The marketplaces from which to retrieve summaries. If omitted, summaries from all applicable marketplaces may be returned. To find the marketplace ID for a region, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?string  $accountType  The type of account to include in the response.
     * @param  ?string  $relatedIdentifierName  The name of the `relatedIdentifier`. The only possible value is `SETTLEMENT_ID`, the settlement ID associated with the summary.
     * @param  ?string  $relatedIdentifierValue  The value of the `relatedIdentifier`.
     * @param  ?\DateTimeInterface  $periodStart  The start of the period for which to retrieve summaries. When provided, the response will only include summaries with transactions that occurred on or after the specified date. The value must be formatted in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date format.
     * @param  ?\DateTimeInterface  $periodEnd  The end of the period for which to retrieve summaries. When provided, the response will only include summaries with transactions that occurred on or before the specified date. The value must be formatted in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date format.
     * @param  ?string  $nextToken  A token that you use to retrieve subsequent pages of results. When there are more results available, the response will include a `nextToken` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. Repeat this process until the `nextToken` value is null to retrieve all results.
     */
    public function listSummary(
        ?array $marketplaceIds = null,
        ?string $accountType = null,
        ?string $relatedIdentifierName = null,
        ?string $relatedIdentifierValue = null,
        ?\DateTimeInterface $periodStart = null,
        ?\DateTimeInterface $periodEnd = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListSummary($marketplaceIds, $accountType, $relatedIdentifierName, $relatedIdentifierValue, $periodStart, $periodEnd, $nextToken);

        return $this->connector->send($request);
    }
}
