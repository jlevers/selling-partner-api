<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Promotion extends BaseDto
{
    /**
     * @param  ?DiscountFunding  $sellingPartnerFundedBaseDiscount  The discount funding on the offer.
     * @param  ?DiscountFunding  $sellingPartnerFundedTieredDiscount  The discount funding on the offer.
     * @param  ?DiscountFunding  $amazonFundedBaseDiscount  The discount funding on the offer.
     * @param  ?DiscountFunding  $amazonFundedTieredDiscount  The discount funding on the offer.
     */
    public function __construct(
        public readonly ?DiscountFunding $sellingPartnerFundedBaseDiscount = null,
        public readonly ?DiscountFunding $sellingPartnerFundedTieredDiscount = null,
        public readonly ?DiscountFunding $amazonFundedBaseDiscount = null,
        public readonly ?DiscountFunding $amazonFundedTieredDiscount = null,
    ) {
    }
}
