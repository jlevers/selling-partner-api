<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Order extends BaseDto
{
    protected static array $attributeMap = [
        'amazonOrderId' => 'AmazonOrderId',
        'purchaseDate' => 'PurchaseDate',
        'lastUpdateDate' => 'LastUpdateDate',
        'orderStatus' => 'OrderStatus',
        'sellerOrderId' => 'SellerOrderId',
        'fulfillmentChannel' => 'FulfillmentChannel',
        'salesChannel' => 'SalesChannel',
        'orderChannel' => 'OrderChannel',
        'shipServiceLevel' => 'ShipServiceLevel',
        'orderTotal' => 'OrderTotal',
        'numberOfItemsShipped' => 'NumberOfItemsShipped',
        'numberOfItemsUnshipped' => 'NumberOfItemsUnshipped',
        'paymentExecutionDetail' => 'PaymentExecutionDetail',
        'paymentMethod' => 'PaymentMethod',
        'paymentMethodDetails' => 'PaymentMethodDetails',
        'marketplaceId' => 'MarketplaceId',
        'shipmentServiceLevelCategory' => 'ShipmentServiceLevelCategory',
        'easyShipShipmentStatus' => 'EasyShipShipmentStatus',
        'cbaDisplayableShippingLabel' => 'CbaDisplayableShippingLabel',
        'orderType' => 'OrderType',
        'earliestShipDate' => 'EarliestShipDate',
        'latestShipDate' => 'LatestShipDate',
        'earliestDeliveryDate' => 'EarliestDeliveryDate',
        'latestDeliveryDate' => 'LatestDeliveryDate',
        'isBusinessOrder' => 'IsBusinessOrder',
        'isPrime' => 'IsPrime',
        'isPremiumOrder' => 'IsPremiumOrder',
        'isGlobalExpressEnabled' => 'IsGlobalExpressEnabled',
        'replacedOrderId' => 'ReplacedOrderId',
        'isReplacementOrder' => 'IsReplacementOrder',
        'promiseResponseDueDate' => 'PromiseResponseDueDate',
        'isEstimatedShipDateSet' => 'IsEstimatedShipDateSet',
        'isSoldByAb' => 'IsSoldByAB',
        'isIba' => 'IsIBA',
        'defaultShipFromLocationAddress' => 'DefaultShipFromLocationAddress',
        'buyerInvoicePreference' => 'BuyerInvoicePreference',
        'buyerTaxInformation' => 'BuyerTaxInformation',
        'fulfillmentInstruction' => 'FulfillmentInstruction',
        'isIspu' => 'IsISPU',
        'isAccessPointOrder' => 'IsAccessPointOrder',
        'marketplaceTaxInfo' => 'MarketplaceTaxInfo',
        'sellerDisplayName' => 'SellerDisplayName',
        'shippingAddress' => 'ShippingAddress',
        'buyerInfo' => 'BuyerInfo',
        'automatedShippingSettings' => 'AutomatedShippingSettings',
        'hasRegulatedItems' => 'HasRegulatedItems',
        'electronicInvoiceStatus' => 'ElectronicInvoiceStatus',
    ];

    protected static array $complexArrayTypes = ['paymentExecutionDetail' => [PaymentExecutionDetailItem::class]];

    /**
     * @param  string  $amazonOrderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  string  $purchaseDate  The date when the order was created.
     * @param  string  $lastUpdateDate  The date when the order was last updated.
     *
     * __Note__: LastUpdateDate is returned with an incorrect date for orders that were last updated before 2009-04-01.
     * @param  string  $orderStatus  The current order status.
     * @param  ?string  $sellerOrderId  A seller-defined order identifier.
     * @param  ?string  $fulfillmentChannel  Whether the order was fulfilled by Amazon (AFN) or by the seller (MFN).
     * @param  ?string  $salesChannel  The sales channel of the first item in the order.
     * @param  ?string  $orderChannel  The order channel of the first item in the order.
     * @param  ?string  $shipServiceLevel  The shipment service level of the order.
     * @param  ?Money  $orderTotal  The monetary value of the order.
     * @param  ?int  $numberOfItemsShipped  The number of items shipped.
     * @param  ?int  $numberOfItemsUnshipped  The number of items unshipped.
     * @param  PaymentExecutionDetailItem[]|null  $paymentExecutionDetail  A list of payment execution detail items.
     * @param  ?string  $paymentMethod  The payment method for the order. This property is limited to Cash On Delivery (COD) and Convenience Store (CVS) payment methods. Unless you need the specific COD payment information provided by the PaymentExecutionDetailItem object, we recommend using the PaymentMethodDetails property to get payment method information.
     * @param  ?string[]  $paymentMethodDetails  A list of payment method detail items.
     * @param  ?string  $marketplaceId  The identifier for the marketplace where the order was placed.
     * @param  ?string  $shipmentServiceLevelCategory  The shipment service level category of the order.
     *
     * Possible values: Expedited, FreeEconomy, NextDay, Priority, SameDay, SecondDay, Scheduled, Standard.
     * @param  ?string  $easyShipShipmentStatus  The status of the Amazon Easy Ship order. This property is included only for Amazon Easy Ship orders.
     * @param  ?string  $cbaDisplayableShippingLabel  Custom ship label for Checkout by Amazon (CBA).
     * @param  ?string  $orderType  The type of the order.
     * @param  ?string  $earliestShipDate  The start of the time period within which you have committed to ship the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders.
     *
     * __Note__: EarliestShipDate might not be returned for orders placed before February 1, 2013.
     * @param  ?string  $latestShipDate  The end of the time period within which you have committed to ship the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders.
     *
     * __Note__: LatestShipDate might not be returned for orders placed before February 1, 2013.
     * @param  ?string  $earliestDeliveryDate  The start of the time period within which you have committed to fulfill the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders.
     * @param  ?string  $latestDeliveryDate  The end of the time period within which you have committed to fulfill the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders that do not have a PendingAvailability, Pending, or Canceled status.
     * @param  ?bool  $isBusinessOrder  When true, the order is an Amazon Business order. An Amazon Business order is an order where the buyer is a Verified Business Buyer.
     * @param  ?bool  $isPrime  When true, the order is a seller-fulfilled Amazon Prime order.
     * @param  ?bool  $isPremiumOrder  When true, the order has a Premium Shipping Service Level Agreement. For more information about Premium Shipping orders, see "Premium Shipping Options" in the Seller Central Help for your marketplace.
     * @param  ?bool  $isGlobalExpressEnabled  When true, the order is a GlobalExpress order.
     * @param  ?string  $replacedOrderId  The order ID value for the order that is being replaced. Returned only if IsReplacementOrder = true.
     * @param  ?bool  $isReplacementOrder  When true, this is a replacement order.
     * @param  ?string  $promiseResponseDueDate  Indicates the date by which the seller must respond to the buyer with an estimated ship date. Returned only for Sourcing on Demand orders.
     * @param  ?bool  $isEstimatedShipDateSet  When true, the estimated ship date is set for the order. Returned only for Sourcing on Demand orders.
     * @param  ?bool  $isSoldByAb  When true, the item within this order was bought and re-sold by Amazon Business EU SARL (ABEU). By buying and instantly re-selling your items, ABEU becomes the seller of record, making your inventory available for sale to customers who would not otherwise purchase from a third-party seller.
     * @param  ?bool  $isIba  When true, the item within this order was bought and re-sold by Amazon Business EU SARL (ABEU). By buying and instantly re-selling your items, ABEU becomes the seller of record, making your inventory available for sale to customers who would not otherwise purchase from a third-party seller.
     * @param  ?Address  $defaultShipFromLocationAddress  The shipping address for the order.
     * @param  ?string  $buyerInvoicePreference  The buyer's invoicing preference. Available only in the TR marketplace.
     * @param  ?BuyerTaxInformation  $buyerTaxInformation  Contains the business invoice tax information. Available only in the TR marketplace.
     * @param  ?FulfillmentInstruction  $fulfillmentInstruction  Contains the instructions about the fulfillment like where should it be fulfilled from.
     * @param  ?bool  $isIspu  When true, this order is marked to be picked up from a store rather than delivered.
     * @param  ?bool  $isAccessPointOrder  When true, this order is marked to be delivered to an Access Point. The access location is chosen by the customer. Access Points include Amazon Hub Lockers, Amazon Hub Counters, and pickup points operated by carriers.
     * @param  ?MarketplaceTaxInfo  $marketplaceTaxInfo  Tax information about the marketplace.
     * @param  ?string  $sellerDisplayName  The seller’s friendly name registered in the marketplace.
     * @param  ?Address  $shippingAddress  The shipping address for the order.
     * @param  ?BuyerInfo  $buyerInfo  Buyer information.
     * @param  ?AutomatedShippingSettings  $automatedShippingSettings  Contains information regarding the Shipping Settings Automation program, such as whether the order's shipping settings were generated automatically, and what those settings are.
     * @param  ?bool  $hasRegulatedItems  Whether the order contains regulated items which may require additional approval steps before being fulfilled.
     * @param  ?string  $electronicInvoiceStatus  The status of the electronic invoice.
     */
    public function __construct(
        public readonly string $amazonOrderId,
        public readonly string $purchaseDate,
        public readonly string $lastUpdateDate,
        public readonly string $orderStatus,
        public readonly ?string $sellerOrderId = null,
        public readonly ?string $fulfillmentChannel = null,
        public readonly ?string $salesChannel = null,
        public readonly ?string $orderChannel = null,
        public readonly ?string $shipServiceLevel = null,
        public readonly ?Money $orderTotal = null,
        public readonly ?int $numberOfItemsShipped = null,
        public readonly ?int $numberOfItemsUnshipped = null,
        public readonly ?array $paymentExecutionDetail = null,
        public readonly ?string $paymentMethod = null,
        public readonly ?array $paymentMethodDetails = null,
        public readonly ?string $marketplaceId = null,
        public readonly ?string $shipmentServiceLevelCategory = null,
        public readonly ?string $easyShipShipmentStatus = null,
        public readonly ?string $cbaDisplayableShippingLabel = null,
        public readonly ?string $orderType = null,
        public readonly ?string $earliestShipDate = null,
        public readonly ?string $latestShipDate = null,
        public readonly ?string $earliestDeliveryDate = null,
        public readonly ?string $latestDeliveryDate = null,
        public readonly ?bool $isBusinessOrder = null,
        public readonly ?bool $isPrime = null,
        public readonly ?bool $isPremiumOrder = null,
        public readonly ?bool $isGlobalExpressEnabled = null,
        public readonly ?string $replacedOrderId = null,
        public readonly ?bool $isReplacementOrder = null,
        public readonly ?string $promiseResponseDueDate = null,
        public readonly ?bool $isEstimatedShipDateSet = null,
        public readonly ?bool $isSoldByAb = null,
        public readonly ?bool $isIba = null,
        public readonly ?Address $defaultShipFromLocationAddress = null,
        public readonly ?string $buyerInvoicePreference = null,
        public readonly ?BuyerTaxInformation $buyerTaxInformation = null,
        public readonly ?FulfillmentInstruction $fulfillmentInstruction = null,
        public readonly ?bool $isIspu = null,
        public readonly ?bool $isAccessPointOrder = null,
        public readonly ?MarketplaceTaxInfo $marketplaceTaxInfo = null,
        public readonly ?string $sellerDisplayName = null,
        public readonly ?Address $shippingAddress = null,
        public readonly ?BuyerInfo $buyerInfo = null,
        public readonly ?AutomatedShippingSettings $automatedShippingSettings = null,
        public readonly ?bool $hasRegulatedItems = null,
        public readonly ?string $electronicInvoiceStatus = null,
    ) {
    }
}
