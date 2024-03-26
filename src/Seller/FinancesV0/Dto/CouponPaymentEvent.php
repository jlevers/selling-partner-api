<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CouponPaymentEvent extends BaseDto
{
    protected static array $attributeMap = [
        'postedDate' => 'PostedDate',
        'couponId' => 'CouponId',
        'sellerCouponDescription' => 'SellerCouponDescription',
        'clipOrRedemptionCount' => 'ClipOrRedemptionCount',
        'paymentEventId' => 'PaymentEventId',
        'feeComponent' => 'FeeComponent',
        'chargeComponent' => 'ChargeComponent',
        'totalAmount' => 'TotalAmount',
    ];

    /**
     * @param  ?DateTime  $postedDate
     * @param  ?string  $couponId  A coupon identifier.
     * @param  ?string  $sellerCouponDescription  The description provided by the seller when they created the coupon.
     * @param  ?int  $clipOrRedemptionCount  The number of coupon clips or redemptions.
     * @param  ?string  $paymentEventId  A payment event identifier.
     * @param  ?FeeComponent  $feeComponent  A fee associated with the event.
     * @param  ?ChargeComponent  $chargeComponent  A charge on the seller's account.
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
     * @param  ?Currency  $totalAmount  A currency type and amount.
     */
    public function __construct(
        public readonly ?\DateTime $postedDate = null,
        public readonly ?string $couponId = null,
        public readonly ?string $sellerCouponDescription = null,
        public readonly ?int $clipOrRedemptionCount = null,
        public readonly ?string $paymentEventId = null,
        public readonly ?FeeComponent $feeComponent = null,
        public readonly ?ChargeComponent $chargeComponent = null,
        public readonly ?Currency $totalAmount = null,
    ) {
    }
}
