<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OfferProgramConfigurationPromotions extends BaseDto
{
    /**
     * @param  OfferProgramConfigurationPromotionsDiscountFunding  $sellingPartnerFundedBaseDiscount A promotional percentage discount applied to the offer.
     * @param  OfferProgramConfigurationPromotionsDiscountFunding  $sellingPartnerFundedTieredDiscount A promotional percentage discount applied to the offer.
     * @param  OfferProgramConfigurationPromotionsDiscountFunding  $amazonFundedBaseDiscount A promotional percentage discount applied to the offer.
     * @param  OfferProgramConfigurationPromotionsDiscountFunding  $amazonFundedTieredDiscount A promotional percentage discount applied to the offer.
     */
    public function __construct(
        public readonly OfferProgramConfigurationPromotionsDiscountFunding $sellingPartnerFundedBaseDiscount,
        public readonly OfferProgramConfigurationPromotionsDiscountFunding $sellingPartnerFundedTieredDiscount,
        public readonly OfferProgramConfigurationPromotionsDiscountFunding $amazonFundedBaseDiscount,
        public readonly OfferProgramConfigurationPromotionsDiscountFunding $amazonFundedTieredDiscount,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
