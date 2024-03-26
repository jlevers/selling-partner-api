<?php

namespace SellingPartnerApi\Seller\OrdersV0;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\OrdersV0\Dto\ConfirmShipmentRequest;
use SellingPartnerApi\Seller\OrdersV0\Dto\UpdateShipmentStatusRequest;
use SellingPartnerApi\Seller\OrdersV0\Dto\UpdateVerificationStatusRequest;
use SellingPartnerApi\Seller\OrdersV0\Requests\ConfirmShipment;
use SellingPartnerApi\Seller\OrdersV0\Requests\GetOrder;
use SellingPartnerApi\Seller\OrdersV0\Requests\GetOrderAddress;
use SellingPartnerApi\Seller\OrdersV0\Requests\GetOrderBuyerInfo;
use SellingPartnerApi\Seller\OrdersV0\Requests\GetOrderItems;
use SellingPartnerApi\Seller\OrdersV0\Requests\GetOrderItemsBuyerInfo;
use SellingPartnerApi\Seller\OrdersV0\Requests\GetOrderRegulatedInfo;
use SellingPartnerApi\Seller\OrdersV0\Requests\GetOrders;
use SellingPartnerApi\Seller\OrdersV0\Requests\UpdateShipmentStatus;
use SellingPartnerApi\Seller\OrdersV0\Requests\UpdateVerificationStatus;

class Api extends BaseResource
{
    /**
     * @param  array  $marketplaceIds  A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces.
     *
     * Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a complete list of marketplaceId values.
     * @param  ?string  $createdAfter  A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format.
     * @param  ?string  $createdBefore  A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format.
     * @param  ?string  $lastUpdatedAfter  A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format.
     * @param  ?string  $lastUpdatedBefore  A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format.
     * @param  ?array  $orderStatuses  A list of `OrderStatus` values used to filter the results.
     *
     * **Possible values:**
     * - `PendingAvailability` (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.)
     * - `Pending` (The order has been placed but payment has not been authorized.)
     * - `Unshipped` (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped.)
     * - `PartiallyShipped` (One or more, but not all, items in the order have been shipped.)
     * - `Shipped` (All items in the order have been shipped.)
     * - `InvoiceUnconfirmed` (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.)
     * - `Canceled` (The order has been canceled.)
     * - `Unfulfillable` (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.)
     * @param  ?array  $fulfillmentChannels  A list that indicates how an order was fulfilled. Filters the results by fulfillment channel. Possible values: AFN (Fulfillment by Amazon); MFN (Fulfilled by the seller).
     * @param  ?array  $paymentMethods  A list of payment method values. Used to select orders paid using the specified payment methods. Possible values: COD (Cash on delivery); CVS (Convenience store payment); Other (Any payment method other than COD or CVS).
     * @param  ?string  $buyerEmail  The email address of a buyer. Used to select orders that contain the specified email address.
     * @param  ?string  $sellerOrderId  An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified.
     * @param  ?int  $maxResultsPerPage  A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100.
     * @param  ?array  $easyShipShipmentStatuses  A list of `EasyShipShipmentStatus` values. Used to select Easy Ship orders with statuses that match the specified values. If `EasyShipShipmentStatus` is specified, only Amazon Easy Ship orders are returned.
     *
     * **Possible values:**
     * - `PendingSchedule` (The package is awaiting the schedule for pick-up.)
     * - `PendingPickUp` (Amazon has not yet picked up the package from the seller.)
     * - `PendingDropOff` (The seller will deliver the package to the carrier.)
     * - `LabelCanceled` (The seller canceled the pickup.)
     * - `PickedUp` (Amazon has picked up the package from the seller.)
     * - `DroppedOff` (The package is delivered to the carrier by the seller.)
     * - `AtOriginFC` (The packaged is at the origin fulfillment center.)
     * - `AtDestinationFC` (The package is at the destination fulfillment center.)
     * - `Delivered` (The package has been delivered.)
     * - `RejectedByBuyer` (The package has been rejected by the buyer.)
     * - `Undeliverable` (The package cannot be delivered.)
     * - `ReturningToSeller` (The package was not delivered and is being returned to the seller.)
     * - `ReturnedToSeller` (The package was not delivered and was returned to the seller.)
     * - `Lost` (The package is lost.)
     * - `OutForDelivery` (The package is out for delivery.)
     * - `Damaged` (The package was damaged by the carrier.)
     * @param  ?array  $electronicInvoiceStatuses  A list of `ElectronicInvoiceStatus` values. Used to select orders with electronic invoice statuses that match the specified values.
     *
     * **Possible values:**
     * - `NotRequired` (Electronic invoice submission is not required for this order.)
     * - `NotFound` (The electronic invoice was not submitted for this order.)
     * - `Processing` (The electronic invoice is being processed for this order.)
     * - `Errored` (The last submitted electronic invoice was rejected for this order.)
     * - `Accepted` (The last submitted electronic invoice was submitted and accepted.)
     * @param  ?string  $nextToken  A string token returned in the response of your previous request.
     * @param  ?array  $amazonOrderIds  A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format.
     * @param  ?string  $actualFulfillmentSupplySourceId  Denotes the recommended sourceId where the order should be fulfilled from.
     * @param  ?bool  $isIspu  When true, this order is marked to be picked up from a store rather than delivered.
     * @param  ?string  $storeChainStoreId  The store chain store identifier. Linked to a specific store in a store chain.
     * @param  ?string  $earliestDeliveryDateBefore  A date used for selecting orders with a earliest delivery date before (or at) a specified time. The date must be in ISO 8601 format.
     * @param  ?string  $earliestDeliveryDateAfter  A date used for selecting orders with a earliest delivery date after (or at) a specified time. The date must be in ISO 8601 format.
     * @param  ?string  $latestDeliveryDateBefore  A date used for selecting orders with a latest delivery date before (or at) a specified time. The date must be in ISO 8601 format.
     * @param  ?string  $latestDeliveryDateAfter  A date used for selecting orders with a latest delivery date after (or at) a specified time. The date must be in ISO 8601 format.
     */
    public function getOrders(
        array $marketplaceIds,
        ?string $createdAfter = null,
        ?string $createdBefore = null,
        ?string $lastUpdatedAfter = null,
        ?string $lastUpdatedBefore = null,
        ?array $orderStatuses = null,
        ?array $fulfillmentChannels = null,
        ?array $paymentMethods = null,
        ?string $buyerEmail = null,
        ?string $sellerOrderId = null,
        ?int $maxResultsPerPage = null,
        ?array $easyShipShipmentStatuses = null,
        ?array $electronicInvoiceStatuses = null,
        ?string $nextToken = null,
        ?array $amazonOrderIds = null,
        ?string $actualFulfillmentSupplySourceId = null,
        ?bool $isIspu = null,
        ?string $storeChainStoreId = null,
        ?string $earliestDeliveryDateBefore = null,
        ?string $earliestDeliveryDateAfter = null,
        ?string $latestDeliveryDateBefore = null,
        ?string $latestDeliveryDateAfter = null,
    ): Response {
        $request = new GetOrders($marketplaceIds, $createdAfter, $createdBefore, $lastUpdatedAfter, $lastUpdatedBefore, $orderStatuses, $fulfillmentChannels, $paymentMethods, $buyerEmail, $sellerOrderId, $maxResultsPerPage, $easyShipShipmentStatuses, $electronicInvoiceStatuses, $nextToken, $amazonOrderIds, $actualFulfillmentSupplySourceId, $isIspu, $storeChainStoreId, $earliestDeliveryDateBefore, $earliestDeliveryDateAfter, $latestDeliveryDateBefore, $latestDeliveryDateAfter);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  An Amazon-defined order identifier, in 3-7-7 format.
     */
    public function getOrder(string $orderId): Response
    {
        $request = new GetOrder($orderId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  An orderId is an Amazon-defined order identifier, in 3-7-7 format.
     */
    public function getOrderBuyerInfo(string $orderId): Response
    {
        $request = new GetOrderBuyerInfo($orderId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  An orderId is an Amazon-defined order identifier, in 3-7-7 format.
     */
    public function getOrderAddress(string $orderId): Response
    {
        $request = new GetOrderAddress($orderId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  ?string  $nextToken  A string token returned in the response of your previous request.
     */
    public function getOrderItems(string $orderId, ?string $nextToken = null): Response
    {
        $request = new GetOrderItems($orderId, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  ?string  $nextToken  A string token returned in the response of your previous request.
     */
    public function getOrderItemsBuyerInfo(string $orderId, ?string $nextToken = null): Response
    {
        $request = new GetOrderItemsBuyerInfo($orderId, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  UpdateShipmentStatusRequest  $updateShipmentStatusRequest  The request body for the updateShipmentStatus operation.
     */
    public function updateShipmentStatus(
        string $orderId,
        UpdateShipmentStatusRequest $updateShipmentStatusRequest,
    ): Response {
        $request = new UpdateShipmentStatus($orderId, $updateShipmentStatusRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  An orderId is an Amazon-defined order identifier, in 3-7-7 format.
     */
    public function getOrderRegulatedInfo(string $orderId): Response
    {
        $request = new GetOrderRegulatedInfo($orderId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  An orderId is an Amazon-defined order identifier, in 3-7-7 format.
     * @param  UpdateVerificationStatusRequest  $updateVerificationStatusRequest  The request body for the updateVerificationStatus operation.
     */
    public function updateVerificationStatus(
        string $orderId,
        UpdateVerificationStatusRequest $updateVerificationStatusRequest,
    ): Response {
        $request = new UpdateVerificationStatus($orderId, $updateVerificationStatusRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  ConfirmShipmentRequest  $confirmShipmentRequest  The request schema for an shipment confirmation.
     */
    public function confirmShipment(string $orderId, ConfirmShipmentRequest $confirmShipmentRequest): Response
    {
        $request = new ConfirmShipment($orderId, $confirmShipmentRequest);

        return $this->connector->send($request);
    }
}
