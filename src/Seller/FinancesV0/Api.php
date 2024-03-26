<?php

namespace SellingPartnerApi\Seller\FinancesV0;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FinancesV0\Requests\ListFinancialEventGroups;
use SellingPartnerApi\Seller\FinancesV0\Requests\ListFinancialEvents;
use SellingPartnerApi\Seller\FinancesV0\Requests\ListFinancialEventsByGroupId;
use SellingPartnerApi\Seller\FinancesV0\Requests\ListFinancialEventsByOrderId;

class Api extends BaseResource
{
    /**
     * @param  ?int  $maxResultsPerPage  The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with 'InvalidInput'.
     * @param  ?DateTime  $financialEventGroupStartedBefore  A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned.
     * @param  ?DateTime  $financialEventGroupStartedAfter  A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted.
     * @param  ?string  $nextToken  A string token returned in the response of your previous request.
     */
    public function listFinancialEventGroups(
        ?int $maxResultsPerPage = null,
        ?\DateTime $financialEventGroupStartedBefore = null,
        ?\DateTime $financialEventGroupStartedAfter = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListFinancialEventGroups($maxResultsPerPage, $financialEventGroupStartedBefore, $financialEventGroupStartedAfter, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $eventGroupId  The identifier of the financial event group to which the events belong.
     * @param  ?int  $maxResultsPerPage  The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with 'InvalidInput'.
     * @param  ?DateTime  $postedAfter  A date used for selecting financial events posted after (or at) a specified time. The date-time **must** be more than two minutes before the time of the request, in ISO 8601 date time format.
     * @param  ?DateTime  $postedBefore  A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than `PostedAfter` and no later than two minutes before the request was submitted, in ISO 8601 date time format. If `PostedAfter` and `PostedBefore` are more than 180 days apart, no financial events are returned. You must specify the `PostedAfter` parameter if you specify the `PostedBefore` parameter. Default: Now minus two minutes.
     * @param  ?string  $nextToken  A string token returned in the response of your previous request.
     */
    public function listFinancialEventsByGroupId(
        string $eventGroupId,
        ?int $maxResultsPerPage = null,
        ?\DateTime $postedAfter = null,
        ?\DateTime $postedBefore = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListFinancialEventsByGroupId($eventGroupId, $maxResultsPerPage, $postedAfter, $postedBefore, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  ?int  $maxResultsPerPage  The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with 'InvalidInput'.
     * @param  ?string  $nextToken  A string token returned in the response of your previous request.
     */
    public function listFinancialEventsByOrderId(
        string $orderId,
        ?int $maxResultsPerPage = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListFinancialEventsByOrderId($orderId, $maxResultsPerPage, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  ?int  $maxResultsPerPage  The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with 'InvalidInput'.
     * @param  ?DateTime  $postedAfter  A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format.
     * @param  ?DateTime  $postedBefore  A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes.
     * @param  ?string  $nextToken  A string token returned in the response of your previous request.
     */
    public function listFinancialEvents(
        ?int $maxResultsPerPage = null,
        ?\DateTime $postedAfter = null,
        ?\DateTime $postedBefore = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListFinancialEvents($maxResultsPerPage, $postedAfter, $postedBefore, $nextToken);

        return $this->connector->send($request);
    }
}
