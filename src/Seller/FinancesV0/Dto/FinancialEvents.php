<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FinancialEvents extends BaseDto
{
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
     * @param  ShipmentEvent[]  $shipmentEventList A list of shipment event information.
     * @param  ShipmentEvent[]  $shipmentSettleEventList A list of `ShipmentEvent` items.
     * @param  ShipmentEvent[]  $refundEventList A list of shipment event information.
     * @param  ShipmentEvent[]  $guaranteeClaimEventList A list of shipment event information.
     * @param  ShipmentEvent[]  $chargebackEventList A list of shipment event information.
     * @param  PayWithAmazonEvent[]  $payWithAmazonEventList A list of events related to the seller's Pay with Amazon account.
     * @param  SolutionProviderCreditEvent[]  $serviceProviderCreditEventList A list of information about solution provider credits.
     * @param  RetrochargeEvent[]  $retrochargeEventList A list of information about Retrocharge or RetrochargeReversal events.
     * @param  RentalTransactionEvent[]  $rentalTransactionEventList A list of rental transaction event information.
     * @param  ProductAdsPaymentEvent[]  $productAdsPaymentEventList A list of sponsored products payment events.
     * @param  ServiceFeeEvent[]  $serviceFeeEventList A list of information about service fee events.
     * @param  SellerDealPaymentEvent[]  $sellerDealPaymentEventList A list of payment events for deal-related fees.
     * @param  DebtRecoveryEvent[]  $debtRecoveryEventList A list of debt recovery event information.
     * @param  LoanServicingEvent[]  $loanServicingEventList A list of loan servicing events.
     * @param  AdjustmentEvent[]  $adjustmentEventList A list of adjustment event information for the seller's account.
     * @param  SafetReimbursementEvent[]  $safetReimbursementEventList A list of SAFETReimbursementEvents.
     * @param  SellerReviewEnrollmentPaymentEvent[]  $sellerReviewEnrollmentPaymentEventList A list of information about fee events for the Early Reviewer Program.
     * @param  FbaLiquidationEvent[]  $fbaLiquidationEventList A list of FBA inventory liquidation payment events.
     * @param  CouponPaymentEvent[]  $couponPaymentEventList A list of coupon payment event information.
     * @param  ImagingServicesFeeEvent[]  $imagingServicesFeeEventList A list of fee events related to Amazon Imaging services.
     * @param  NetworkComminglingTransactionEvent[]  $networkComminglingTransactionEventList A list of network commingling transaction events.
     * @param  AffordabilityExpenseEvent[]  $affordabilityExpenseEventList A list of expense information related to an affordability promotion.
     * @param  AffordabilityExpenseEvent[]  $affordabilityExpenseReversalEventList A list of expense information related to an affordability promotion.
     * @param  RemovalShipmentEvent[]  $removalShipmentEventList A list of removal shipment event information.
     * @param  RemovalShipmentAdjustmentEvent[]  $removalShipmentAdjustmentEventList A comma-delimited list of Removal shipmentAdjustment details for FBA inventory.
     * @param  TrialShipmentEvent[]  $trialShipmentEventList A list of information about trial shipment financial events.
     * @param  TdsReimbursementEvent[]  $tdsReimbursementEventList A list of `TDSReimbursementEvent` items.
     * @param  AdhocDisbursementEvent[]  $adhocDisbursementEventList A list of `AdhocDisbursement` events.
     * @param  TaxWithholdingEvent[]  $taxWithholdingEventList A list of `TaxWithholding` events.
     * @param  ChargeRefundEvent[]  $chargeRefundEventList A list of charge refund events.
     * @param  FailedAdhocDisbursementEvent[]  $failedAdhocDisbursementEventList A list of `FailedAdhocDisbursementEvent`s.
     * @param  ValueAddedServiceChargeEvent[]  $valueAddedServiceChargeEventList A list of `ValueAddedServiceCharge` events.
     * @param  CapacityReservationBillingEvent[]  $capacityReservationBillingEventList A list of `CapacityReservationBillingEvent` events.
     * @param  ?mixed  $additionalProperties
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
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
