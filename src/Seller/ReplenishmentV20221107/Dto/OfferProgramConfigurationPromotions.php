<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OfferProgramConfigurationPromotions extends BaseDto
{
    /**
     * @param  ?OfferProgramConfigurationPromotionsDiscountFunding  $sellingPartnerFundedBaseDiscount  A promotional percentage discount applied to the offer.
     * @param  ?OfferProgramConfigurationPromotionsDiscountFunding  $sellingPartnerFundedTieredDiscount  A promotional percentage discount applied to the offer.
     * @param  ?OfferProgramConfigurationPromotionsDiscountFunding  $amazonFundedBaseDiscount  A promotional percentage discount applied to the offer.
     * @param  ?OfferProgramConfigurationPromotionsDiscountFunding  $amazonFundedTieredDiscount  A promotional percentage discount applied to the offer.
     */
    public function __construct(
        public readonly ?OfferProgramConfigurationPromotionsDiscountFunding $sellingPartnerFundedBaseDiscount = null,
        public readonly ?OfferProgramConfigurationPromotionsDiscountFunding $sellingPartnerFundedTieredDiscount = null,
        public readonly ?OfferProgramConfigurationPromotionsDiscountFunding $amazonFundedBaseDiscount = null,
        public readonly ?OfferProgramConfigurationPromotionsDiscountFunding $amazonFundedTieredDiscount = null,
    ) {
    }
}
