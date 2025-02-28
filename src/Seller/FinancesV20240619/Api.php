<?php

namespace SellingPartnerApi\Seller\FinancesV20240619;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FinancesV20240619\Requests\ListTransactions;

class Api extends BaseResource
{
    /**
     * @param  \DateTimeInterface  $postedAfter  A date used for selecting transactions posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format.
     * @param  ?\DateTimeInterface  $postedBefore  A date used for selecting transactions posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no transactions are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes.
     * @param  ?string  $marketplaceId  A string token used to select Marketplace ID.
     * @param  ?string  $nextToken  A string token returned in the response of your previous request.
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
