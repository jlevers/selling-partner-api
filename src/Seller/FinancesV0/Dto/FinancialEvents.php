<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FinancialEvents extends BaseDto
{
    protected static array $attributeMap = [
        'shipmentEventList' => 'ShipmentEventList',
        'shipmentSettleEventList' => 'ShipmentSettleEventList',
        'refundEventList' => 'RefundEventList',
        'guaranteeClaimEventList' => 'GuaranteeClaimEventList',
        'chargebackEventList' => 'ChargebackEventList',
        'payWithAmazonEventList' => 'PayWithAmazonEventList',
        'serviceProviderCreditEventList' => 'ServiceProviderCreditEventList',
        'retrochargeEventList' => 'RetrochargeEventList',
        'rentalTransactionEventList' => 'RentalTransactionEventList',
        'productAdsPaymentEventList' => 'ProductAdsPaymentEventList',
        'serviceFeeEventList' => 'ServiceFeeEventList',
        'sellerDealPaymentEventList' => 'SellerDealPaymentEventList',
        'debtRecoveryEventList' => 'DebtRecoveryEventList',
        'loanServicingEventList' => 'LoanServicingEventList',
        'adjustmentEventList' => 'AdjustmentEventList',
        'safetReimbursementEventList' => 'SAFETReimbursementEventList',
        'sellerReviewEnrollmentPaymentEventList' => 'SellerReviewEnrollmentPaymentEventList',
        'fbaLiquidationEventList' => 'FBALiquidationEventList',
        'couponPaymentEventList' => 'CouponPaymentEventList',
        'imagingServicesFeeEventList' => 'ImagingServicesFeeEventList',
        'networkComminglingTransactionEventList' => 'NetworkComminglingTransactionEventList',
        'affordabilityExpenseEventList' => 'AffordabilityExpenseEventList',
        'affordabilityExpenseReversalEventList' => 'AffordabilityExpenseReversalEventList',
        'removalShipmentEventList' => 'RemovalShipmentEventList',
        'removalShipmentAdjustmentEventList' => 'RemovalShipmentAdjustmentEventList',
        'trialShipmentEventList' => 'TrialShipmentEventList',
        'tdsReimbursementEventList' => 'TDSReimbursementEventList',
        'adhocDisbursementEventList' => 'AdhocDisbursementEventList',
        'taxWithholdingEventList' => 'TaxWithholdingEventList',
        'chargeRefundEventList' => 'ChargeRefundEventList',
        'failedAdhocDisbursementEventList' => 'FailedAdhocDisbursementEventList',
        'valueAddedServiceChargeEventList' => 'ValueAddedServiceChargeEventList',
        'capacityReservationBillingEventList' => 'CapacityReservationBillingEventList',
    ];

    protected static array $complexArrayTypes = [
        'shipmentEventList' => [ShipmentEvent::class],
        'shipmentSettleEventList' => [ShipmentEvent::class],
        'refundEventList' => [ShipmentEvent::class],
        'guaranteeClaimEventList' => [ShipmentEvent::class],
        'chargebackEventList' => [ShipmentEvent::class],
        'payWithAmazonEventList' => [PayWithAmazonEvent::class],
        'serviceProviderCreditEventList' => [SolutionProviderCreditEvent::class],
        'retrochargeEventList' => [RetrochargeEvent::class],
        'rentalTransactionEventList' => [RentalTransactionEvent::class],
        'productAdsPaymentEventList' => [ProductAdsPaymentEvent::class],
        'serviceFeeEventList' => [ServiceFeeEvent::class],
        'sellerDealPaymentEventList' => [SellerDealPaymentEvent::class],
        'debtRecoveryEventList' => [DebtRecoveryEvent::class],
        'loanServicingEventList' => [LoanServicingEvent::class],
        'adjustmentEventList' => [AdjustmentEvent::class],
        'safetReimbursementEventList' => [SafetReimbursementEvent::class],
        'sellerReviewEnrollmentPaymentEventList' => [SellerReviewEnrollmentPaymentEvent::class],
        'fbaLiquidationEventList' => [FbaLiquidationEvent::class],
        'couponPaymentEventList' => [CouponPaymentEvent::class],
        'imagingServicesFeeEventList' => [ImagingServicesFeeEvent::class],
        'networkComminglingTransactionEventList' => [NetworkComminglingTransactionEvent::class],
        'affordabilityExpenseEventList' => [AffordabilityExpenseEvent::class],
        'affordabilityExpenseReversalEventList' => [AffordabilityExpenseEvent::class],
        'removalShipmentEventList' => [RemovalShipmentEvent::class],
        'removalShipmentAdjustmentEventList' => [RemovalShipmentAdjustmentEvent::class],
        'trialShipmentEventList' => [TrialShipmentEvent::class],
        'tdsReimbursementEventList' => [TdsReimbursementEvent::class],
        'adhocDisbursementEventList' => [AdhocDisbursementEvent::class],
        'taxWithholdingEventList' => [TaxWithholdingEvent::class],
        'chargeRefundEventList' => [ChargeRefundEvent::class],
        'failedAdhocDisbursementEventList' => [FailedAdhocDisbursementEvent::class],
        'valueAddedServiceChargeEventList' => [ValueAddedServiceChargeEvent::class],
        'capacityReservationBillingEventList' => [CapacityReservationBillingEvent::class],
    ];

    /**
     * @param  ShipmentEvent[]|null  $shipmentEventList  A list of shipment event information.
     * @param  ShipmentEvent[]|null  $shipmentSettleEventList  A list of `ShipmentEvent` items.
     * @param  ShipmentEvent[]|null  $refundEventList  A list of shipment event information.
     * @param  ShipmentEvent[]|null  $guaranteeClaimEventList  A list of shipment event information.
     * @param  ShipmentEvent[]|null  $chargebackEventList  A list of shipment event information.
     * @param  PayWithAmazonEvent[]|null  $payWithAmazonEventList  A list of events related to the seller's Pay with Amazon account.
     * @param  SolutionProviderCreditEvent[]|null  $serviceProviderCreditEventList  A list of information about solution provider credits.
     * @param  RetrochargeEvent[]|null  $retrochargeEventList  A list of information about Retrocharge or RetrochargeReversal events.
     * @param  RentalTransactionEvent[]|null  $rentalTransactionEventList  A list of rental transaction event information.
     * @param  ProductAdsPaymentEvent[]|null  $productAdsPaymentEventList  A list of sponsored products payment events.
     * @param  ServiceFeeEvent[]|null  $serviceFeeEventList  A list of information about service fee events.
     * @param  SellerDealPaymentEvent[]|null  $sellerDealPaymentEventList  A list of payment events for deal-related fees.
     * @param  DebtRecoveryEvent[]|null  $debtRecoveryEventList  A list of debt recovery event information.
     * @param  LoanServicingEvent[]|null  $loanServicingEventList  A list of loan servicing events.
     * @param  AdjustmentEvent[]|null  $adjustmentEventList  A list of adjustment event information for the seller's account.
     * @param  SafetReimbursementEvent[]|null  $safetReimbursementEventList  A list of SAFETReimbursementEvents.
     * @param  SellerReviewEnrollmentPaymentEvent[]|null  $sellerReviewEnrollmentPaymentEventList  A list of information about fee events for the Early Reviewer Program.
     * @param  FbaLiquidationEvent[]|null  $fbaLiquidationEventList  A list of FBA inventory liquidation payment events.
     * @param  CouponPaymentEvent[]|null  $couponPaymentEventList  A list of coupon payment event information.
     * @param  ImagingServicesFeeEvent[]|null  $imagingServicesFeeEventList  A list of fee events related to Amazon Imaging services.
     * @param  NetworkComminglingTransactionEvent[]|null  $networkComminglingTransactionEventList  A list of network commingling transaction events.
     * @param  AffordabilityExpenseEvent[]|null  $affordabilityExpenseEventList  A list of expense information related to an affordability promotion.
     * @param  AffordabilityExpenseEvent[]|null  $affordabilityExpenseReversalEventList  A list of expense information related to an affordability promotion.
     * @param  RemovalShipmentEvent[]|null  $removalShipmentEventList  A list of removal shipment event information.
     * @param  RemovalShipmentAdjustmentEvent[]|null  $removalShipmentAdjustmentEventList  A comma-delimited list of Removal shipmentAdjustment details for FBA inventory.
     * @param  TrialShipmentEvent[]|null  $trialShipmentEventList  A list of information about trial shipment financial events.
     * @param  TdsReimbursementEvent[]|null  $tdsReimbursementEventList  A list of `TDSReimbursementEvent` items.
     * @param  AdhocDisbursementEvent[]|null  $adhocDisbursementEventList  A list of `AdhocDisbursement` events.
     * @param  TaxWithholdingEvent[]|null  $taxWithholdingEventList  A list of `TaxWithholding` events.
     * @param  ChargeRefundEvent[]|null  $chargeRefundEventList  A list of charge refund events.
     * @param  FailedAdhocDisbursementEvent[]|null  $failedAdhocDisbursementEventList  A list of `FailedAdhocDisbursementEvent`s.
     * @param  ValueAddedServiceChargeEvent[]|null  $valueAddedServiceChargeEventList  A list of `ValueAddedServiceCharge` events.
     * @param  CapacityReservationBillingEvent[]|null  $capacityReservationBillingEventList  A list of `CapacityReservationBillingEvent` events.
     */
    public function __construct(
        public readonly ?array $shipmentEventList = null,
        public readonly ?array $shipmentSettleEventList = null,
        public readonly ?array $refundEventList = null,
        public readonly ?array $guaranteeClaimEventList = null,
        public readonly ?array $chargebackEventList = null,
        public readonly ?array $payWithAmazonEventList = null,
        public readonly ?array $serviceProviderCreditEventList = null,
        public readonly ?array $retrochargeEventList = null,
        public readonly ?array $rentalTransactionEventList = null,
        public readonly ?array $productAdsPaymentEventList = null,
        public readonly ?array $serviceFeeEventList = null,
        public readonly ?array $sellerDealPaymentEventList = null,
        public readonly ?array $debtRecoveryEventList = null,
        public readonly ?array $loanServicingEventList = null,
        public readonly ?array $adjustmentEventList = null,
        public readonly ?array $safetReimbursementEventList = null,
        public readonly ?array $sellerReviewEnrollmentPaymentEventList = null,
        public readonly ?array $fbaLiquidationEventList = null,
        public readonly ?array $couponPaymentEventList = null,
        public readonly ?array $imagingServicesFeeEventList = null,
        public readonly ?array $networkComminglingTransactionEventList = null,
        public readonly ?array $affordabilityExpenseEventList = null,
        public readonly ?array $affordabilityExpenseReversalEventList = null,
        public readonly ?array $removalShipmentEventList = null,
        public readonly ?array $removalShipmentAdjustmentEventList = null,
        public readonly ?array $trialShipmentEventList = null,
        public readonly ?array $tdsReimbursementEventList = null,
        public readonly ?array $adhocDisbursementEventList = null,
        public readonly ?array $taxWithholdingEventList = null,
        public readonly ?array $chargeRefundEventList = null,
        public readonly ?array $failedAdhocDisbursementEventList = null,
        public readonly ?array $valueAddedServiceChargeEventList = null,
        public readonly ?array $capacityReservationBillingEventList = null,
    ) {
    }
}
