<?php

namespace SellingPartnerApi\Seller\TransfersV20240601;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\TransfersV20240601\Dto\InitiatePayoutRequest;
use SellingPartnerApi\Seller\TransfersV20240601\Requests\GetPaymentMethods;
use SellingPartnerApi\Seller\TransfersV20240601\Requests\InitiatePayout;
use SellingPartnerApi\Seller\TransfersV20240601\Requests\ListExpectedPayouts;
use SellingPartnerApi\Seller\TransfersV20240601\Requests\ListPayouts;

class Api extends BaseResource
{
    /**
     * @param  ?array  $marketplaceIds  The Amazon stores from which to retrieve payouts. The Amazon store ID is a globally unique identifier assigned to each Amazon store. If omitted, the response includes payouts from all applicable stores. To find the Amazon store ID for your region, refer to [Store Identifiers](https://developer-docs.amazon/sp-api/docs/store-identifiers).
     * @param  ?\DateTimeInterface  $createdAfter  The response only includes payouts created on or after this date-time. The value must be formatted in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. If omitted, no start date filter is applied.
     * @param  ?\DateTimeInterface  $createdBefore  The response only includes payouts created before this date-time. The value must be formatted in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. If omitted, no end date filter is applied.
     * @param  ?string  $payoutId  The response only includes the payout matching the specified identifier.
     * @param  ?string  $accountType  The response only includes payouts associated with the specified account type.
     * @param  ?string  $nextToken  The response includes `nextToken` when the number of results exceeds the page size. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
     */
    public function listPayouts(
        ?array $marketplaceIds = null,
        ?\DateTimeInterface $createdAfter = null,
        ?\DateTimeInterface $createdBefore = null,
        ?string $payoutId = null,
        ?string $accountType = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListPayouts($marketplaceIds, $createdAfter, $createdBefore, $payoutId, $accountType, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  InitiatePayoutRequest  $initiatePayoutRequest  The request schema for the `initiatePayout` operation.
     */
    public function initiatePayout(InitiatePayoutRequest $initiatePayoutRequest): Response
    {
        $request = new InitiatePayout($initiatePayoutRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $marketplaceId  The identifier of the Amazon store from which you want to retrieve payment methods. For the list of store identifiers, refer to [Store Identifiers](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?array  $paymentMethodTypes  A comma-separated list of the payment method types you want to include in the response.
     */
    public function getPaymentMethods(string $marketplaceId, ?array $paymentMethodTypes = null): Response
    {
        $request = new GetPaymentMethods($marketplaceId, $paymentMethodTypes);

        return $this->connector->send($request);
    }

    /**
     * @param  ?array  $marketplaceIds  The Amazon stores from which to retrieve payouts. The Amazon store ID is a globally unique identifier assigned to each Amazon store. If omitted, the response includes payouts from all applicable stores. To find the Amazon store ID for your region, refer to [Store Identifiers](https://developer-docs.amazon/sp-api/docs/store-identifiers).
     * @param  ?string  $accountType  The response only includes the accounts of the specified account type.
     * @param  ?string  $nextToken  The response includes `nextToken` when the number of results exceeds the specified page size. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
     */
    public function listExpectedPayouts(
        ?array $marketplaceIds = null,
        ?string $accountType = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListExpectedPayouts($marketplaceIds, $accountType, $nextToken);

        return $this->connector->send($request);
    }
}
