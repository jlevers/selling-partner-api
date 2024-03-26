<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PayWithAmazonEvent extends BaseDto
{
    protected static array $attributeMap = [
        'sellerOrderId' => 'SellerOrderId',
        'transactionPostedDate' => 'TransactionPostedDate',
        'businessObjectType' => 'BusinessObjectType',
        'salesChannel' => 'SalesChannel',
        'charge' => 'Charge',
        'feeList' => 'FeeList',
        'paymentAmountType' => 'PaymentAmountType',
        'amountDescription' => 'AmountDescription',
        'fulfillmentChannel' => 'FulfillmentChannel',
        'storeName' => 'StoreName',
    ];

    protected static array $complexArrayTypes = ['feeList' => [FeeComponent::class]];

    /**
     * @param  ?string  $sellerOrderId  An order identifier that is specified by the seller.
     * @param  ?DateTime  $transactionPostedDate
     * @param  ?string  $businessObjectType  The type of business object.
     * @param  ?string  $salesChannel  The sales channel for the transaction.
     * @param  ?ChargeComponent  $charge  A charge on the seller's account.
     *
     * Possible values:
     *
     * * Principal - The selling price of the order item, equal to the selling price of the item multiplied by the quantity ordered.
     *
     * * Tax - The tax collected by the seller on the Principal.
     *
     * * MarketplaceFacilitatorTax-Principal - The tax withheld on the Principal.
     *
     * * MarketplaceFacilitatorTax-Shipping - The tax withheld on the ShippingCharge.
     *
     * * MarketplaceFacilitatorTax-Giftwrap - The tax withheld on the Giftwrap charge.
     *
     * * MarketplaceFacilitatorTax-Other - The tax withheld on other miscellaneous charges.
     *
     * * Discount - The promotional discount for an order item.
     *
     * * TaxDiscount - The tax amount deducted for promotional rebates.
     *
     * * CODItemCharge - The COD charge for an order item.
     *
     * * CODItemTaxCharge - The tax collected by the seller on a CODItemCharge.
     *
     * * CODOrderCharge - The COD charge for an order.
     *
     * * CODOrderTaxCharge - The tax collected by the seller on a CODOrderCharge.
     *
     * * CODShippingCharge - Shipping charges for a COD order.
     *
     * * CODShippingTaxCharge - The tax collected by the seller on a CODShippingCharge.
     *
     * * ShippingCharge - The shipping charge.
     *
     * * ShippingTax - The tax collected by the seller on a ShippingCharge.
     *
     * * Goodwill - The amount given to a buyer as a gesture of goodwill or to compensate for pain and suffering in the buying experience.
     *
     * * Giftwrap - The gift wrap charge.
     *
     * * GiftwrapTax - The tax collected by the seller on a Giftwrap charge.
     *
     * * RestockingFee - The charge applied to the buyer when returning a product in certain categories.
     *
     * * ReturnShipping - The amount given to the buyer to compensate for shipping the item back in the event we are at fault.
     *
     * * PointsFee - The value of Amazon Points deducted from the refund if the buyer does not have enough Amazon Points to cover the deduction.
     *
     * * GenericDeduction - A generic bad debt deduction.
     *
     * * FreeReplacementReturnShipping - The compensation for return shipping when a buyer receives the wrong item, requests a free replacement, and returns the incorrect item.
     *
     * * PaymentMethodFee - The fee collected for certain payment methods in certain marketplaces.
     *
     * * ExportCharge - The export duty that is charged when an item is shipped to an international destination as part of the Amazon Global program.
     *
     * * SAFE-TReimbursement - The SAFE-T claim amount for the item.
     *
     * * TCS-CGST - Tax Collected at Source (TCS) for Central Goods and Services Tax (CGST).
     *
     * * TCS-SGST - Tax Collected at Source for State Goods and Services Tax (SGST).
     *
     * * TCS-IGST - Tax Collected at Source for Integrated Goods and Services Tax (IGST).
     *
     * * TCS-UTGST - Tax Collected at Source for Union Territories Goods and Services Tax (UTGST).
     * @param  FeeComponent[]|null  $feeList  A list of fee component information.
     * @param  ?string  $paymentAmountType  The type of payment.
     *
     * Possible values:
     *
     * * Sales
     * @param  ?string  $amountDescription  A short description of this payment event.
     * @param  ?string  $fulfillmentChannel  The fulfillment channel.
     *
     * Possible values:
     *
     * * AFN - Amazon Fulfillment Network (Fulfillment by Amazon)
     *
     * * MFN - Merchant Fulfillment Network (self-fulfilled)
     * @param  ?string  $storeName  The store name where the event occurred.
     */
    public function __construct(
        public readonly ?string $sellerOrderId = null,
        public readonly ?\DateTime $transactionPostedDate = null,
        public readonly ?string $businessObjectType = null,
        public readonly ?string $salesChannel = null,
        public readonly ?ChargeComponent $charge = null,
        public readonly ?array $feeList = null,
        public readonly ?string $paymentAmountType = null,
        public readonly ?string $amountDescription = null,
        public readonly ?string $fulfillmentChannel = null,
        public readonly ?string $storeName = null,
    ) {
    }
}
