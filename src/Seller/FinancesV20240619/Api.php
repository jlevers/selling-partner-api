<?php

namespace SellingPartnerApi\Seller\FinancesV20240619;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FinancesV20240619\Requests\ListTransactions;

class Api extends BaseResource
{
    /**
     * @param  \DateTimeInterface  $postedAfter  The response includes financial events posted after (or on) this date. This date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. The date-time must be more than two minutes before the time of the request.
     * @param  ?\DateTimeInterface  $postedBefore  The response includes financial events posted before (but not on) this date. This date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     *
     * The date-time must be later than `PostedAfter` and more than two minutes before the request was submitted. If `PostedAfter` and `PostedBefore` are more than 180 days apart, the response is empty.
     *
     * **Default:** Two minutes before the time of the request.
     * @param  ?string  $marketplaceId  The ID of the marketplace from which you want to retrieve transactions.
     * @param  ?string  $nextToken  The response includes `nextToken` when the number of results exceeds the specified `pageSize` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
     */
    public function listTransactions(
        \DateTimeInterface $postedAfter,
        ?\DateTimeInterface $postedBefore = null,
        ?string $marketplaceId = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListTransactions($postedAfter, $postedBefore, $marketplaceId, $nextToken);

        return $this->connector->send($request);
    }
}
