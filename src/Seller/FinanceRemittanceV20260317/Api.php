<?php

namespace SellingPartnerApi\Seller\FinanceRemittanceV20260317;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FinanceRemittanceV20260317\Requests\GetRemittance;
use SellingPartnerApi\Seller\FinanceRemittanceV20260317\Requests\GetRemittanceHeaders;

class Api extends BaseResource
{
    /**
     * @param  string  $marketplaceId  The `marketplaceId` is a globally unique identifier used to specify which Amazon store a request is targeting. For more information, refer to [Store Identifiers](https://developer-docs.amazon/sp-api/docs/store-identifiers).
     * @param  ?string  $startDate  The earliest payment date for remittances to include in the response. Dates are in ISO 8601 date-time format. The default is 30 days prior to the time of the request. The minimum start date is one year ago from the current date.
     * @param  ?string  $endDate  The latest payment date for remittances to include in the response. Dates are in ISO 8601 date-time format. The default is the current date-time. The maximum date range between `startDate` and `endDate` is 90 days.
     * @param  ?string  $nextToken  A token to fetch the next page of results. Use the value returned in the previous response.
     */
    public function getRemittanceHeaders(
        string $marketplaceId,
        ?string $startDate = null,
        ?string $endDate = null,
        ?string $nextToken = null,
    ): Response {
        $request = new GetRemittanceHeaders($marketplaceId, $startDate, $endDate, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $uniquePaymentId  The unique identifier for the payment.
     * @param  string  $marketplaceId  The `marketplaceId` is a globally unique identifier used to specify which Amazon store a request is targeting. For more information, refer to [Store Identifiers](https://developer-docs.amazon/sp-api/docs/store-identifiers).
     * @param  ?string  $nextTokenForLineItems  A token to fetch the next page of results. Use the value returned in the previous response.
     */
    public function getRemittance(
        string $uniquePaymentId,
        string $marketplaceId,
        ?string $nextTokenForLineItems = null,
    ): Response {
        $request = new GetRemittance($uniquePaymentId, $marketplaceId, $nextTokenForLineItems);

        return $this->connector->send($request);
    }
}
