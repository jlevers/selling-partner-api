<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RentalTransactionEvent extends BaseDto
{
    protected static array $attributeMap = [
        'amazonOrderId' => 'AmazonOrderId',
        'rentalEventType' => 'RentalEventType',
        'extensionLength' => 'ExtensionLength',
        'postedDate' => 'PostedDate',
        'rentalChargeList' => 'RentalChargeList',
        'rentalFeeList' => 'RentalFeeList',
        'marketplaceName' => 'MarketplaceName',
        'rentalInitialValue' => 'RentalInitialValue',
        'rentalReimbursement' => 'RentalReimbursement',
        'rentalTaxWithheldList' => 'RentalTaxWithheldList',
    ];

    protected static array $complexArrayTypes = [
        'rentalChargeList' => [ChargeComponent::class],
        'rentalFeeList' => [FeeComponent::class],
        'rentalTaxWithheldList' => [TaxWithheldComponent::class],
    ];

    /**
     * @param  ?string  $amazonOrderId  An Amazon-defined identifier for an order.
     * @param  ?string  $rentalEventType  The type of rental event.
     *
     * Possible values:
     *
     * * RentalCustomerPayment-Buyout - Transaction type that represents when the customer wants to buy out a rented item.
     *
     * * RentalCustomerPayment-Extension - Transaction type that represents when the customer wants to extend the rental period.
     *
     * * RentalCustomerRefund-Buyout - Transaction type that represents when the customer requests a refund for the buyout of the rented item.
     *
     * * RentalCustomerRefund-Extension - Transaction type that represents when the customer requests a refund over the extension on the rented item.
     *
     * * RentalHandlingFee - Transaction type that represents the fee that Amazon charges sellers who rent through Amazon.
     *
     * * RentalChargeFailureReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a failed charge.
     *
     * * RentalLostItemReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a lost item.
     * @param  ?int  $extensionLength  The number of days that the buyer extended an already rented item. This value is only returned for RentalCustomerPayment-Extension and RentalCustomerRefund-Extension events.
     * @param  ?DateTime  $postedDate
     * @param  ChargeComponent[]|null  $rentalChargeList  A list of charge information on the seller's account.
     * @param  FeeComponent[]|null  $rentalFeeList  A list of fee component information.
     * @param  ?string  $marketplaceName  The name of the marketplace.
     * @param  ?Currency  $rentalInitialValue  A currency type and amount.
     * @param  ?Currency  $rentalReimbursement  A currency type and amount.
     * @param  TaxWithheldComponent[]|null  $rentalTaxWithheldList  A list of information about taxes withheld.
     */
    public function __construct(
        public readonly ?string $amazonOrderId = null,
        public readonly ?string $rentalEventType = null,
        public readonly ?int $extensionLength = null,
        public readonly ?\DateTime $postedDate = null,
        public readonly ?array $rentalChargeList = null,
        public readonly ?array $rentalFeeList = null,
        public readonly ?string $marketplaceName = null,
        public readonly ?Currency $rentalInitialValue = null,
        public readonly ?Currency $rentalReimbursement = null,
        public readonly ?array $rentalTaxWithheldList = null,
    ) {
    }
}
