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
     * @param  ?int  $maxResultsPerPage  The maximum number of results per page. If the response exceeds the maximum number of transactions or 10 MB, the response is `InvalidInput`.
     * @param  ?\DateTimeInterface  $financialEventGroupStartedBefore  A date that selects financial event groups that opened before (but not at) a specified date and time, in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) format. The date-time must be after `FinancialEventGroupStartedAfter` and more than two minutes before the time of request. If `FinancialEventGroupStartedAfter` and `FinancialEventGroupStartedBefore` are more than 180 days apart, no financial event groups are returned.
     * @param  ?\DateTimeInterface  $financialEventGroupStartedAfter  A date that selects financial event groups that opened after (or at) a specified date and time, in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) format. The date-time must be more than two minutes before you submit the request.
     * @param  ?string  $nextToken  The response includes `nextToken` when the number of results exceeds the specified `pageSize` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
     */
    public function listFinancialEventGroups(
        ?int $maxResultsPerPage = null,
        ?\DateTimeInterface $financialEventGroupStartedBefore = null,
        ?\DateTimeInterface $financialEventGroupStartedAfter = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListFinancialEventGroups($maxResultsPerPage, $financialEventGroupStartedBefore, $financialEventGroupStartedAfter, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $eventGroupId  The identifier of the financial event group to which the events belong.
     * @param  ?int  $maxResultsPerPage  The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the response is `InvalidInput`.
     * @param  ?\DateTimeInterface  $postedAfter  The response includes financial events posted after (or on) this date. This date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. The date-time must be more than two minutes before the time of the request.
     * @param  ?\DateTimeInterface  $postedBefore  The response includes financial events posted before (but not on) this date. This date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     *
     * The date-time must be later than `PostedAfter` and more than two minutes before the requestd was submitted. If `PostedAfter` and `PostedBefore` are more than 180 days apart, the response is empty. If you include the `PostedBefore` parameter in your request, you must also specify the `PostedAfter` parameter.
     *
     * **Default:** Two minutes before the time of the request.
     * @param  ?string  $nextToken  The response includes `nextToken` when the number of results exceeds the specified `pageSize` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
     */
    public function listFinancialEventsByGroupId(
        string $eventGroupId,
        ?int $maxResultsPerPage = null,
        ?\DateTimeInterface $postedAfter = null,
        ?\DateTimeInterface $postedBefore = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListFinancialEventsByGroupId($eventGroupId, $maxResultsPerPage, $postedAfter, $postedBefore, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  ?int  $maxResultsPerPage  The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the response is `InvalidInput`.
     * @param  ?string  $nextToken  The response includes `nextToken` when the number of results exceeds the specified `pageSize` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
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
     * @param  ?int  $maxResultsPerPage  The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the response is `InvalidInput`.
     * @param  ?\DateTimeInterface  $postedAfter  The response includes financial events posted after (or on) this date. This date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. The date-time must be more than two minutes before the time of the request.
     * @param  ?\DateTimeInterface  $postedBefore  The response includes financial events posted before (but not on) this date. This date must be in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     *
     * The date-time must be later than `PostedAfter` and more than two minutes before the request was submitted. If `PostedAfter` and `PostedBefore` are more than 180 days apart, the response is empty. If you include the `PostedBefore` parameter in your request, you must also specify the `PostedAfter` parameter.
     *
     * **Default:** Two minutes before the time of the request.
     * @param  ?string  $nextToken  The response includes `nextToken` when the number of results exceeds the specified `pageSize` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
     */
    public function listFinancialEvents(
        ?int $maxResultsPerPage = null,
        ?\DateTimeInterface $postedAfter = null,
        ?\DateTimeInterface $postedBefore = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListFinancialEvents($maxResultsPerPage, $postedAfter, $postedBefore, $nextToken);

        return $this->connector->send($request);
    }
}
