<?php

namespace SellingPartnerApi\Seller\FinancesV20240619;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FinancesV20240619\Requests\ListTransactions;

class Api extends BaseResource
{
    /**
     * @param  \DateTimeInterface  $postedAfter  The response includes financial events posted on or after this date. This date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. The date-time must be more than two minutes before the time of the request.
     * @param  ?\DateTimeInterface  $postedBefore  A date used for selecting transactions posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no transactions are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes.
     * @param  ?string  $marketplaceId  The identifier of the marketplace from which you want to retrieve transactions. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?string  $transactionStatus  The status of the transaction.
     *
     * **Possible values:**
     *
     * * `DEFERRED`: the transaction is currently deferred.
     * * `RELEASED`: the transaction is currently released.
     * * `DEFERRED_RELEASED`: the transaction was deferred in the past, but is now released. The status of a deferred transaction is updated to `DEFERRED_RELEASED` when the transaction is released.
     * @param  ?string  $nextToken  A string token returned in the response of your previous request.
     */
    public function listTransactions(
        \DateTimeInterface $postedAfter,
        ?\DateTimeInterface $postedBefore = null,
        ?string $marketplaceId = null,
        ?string $transactionStatus = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListTransactions($postedAfter, $postedBefore, $marketplaceId, $transactionStatus, $nextToken);

        return $this->connector->send($request);
    }
}
