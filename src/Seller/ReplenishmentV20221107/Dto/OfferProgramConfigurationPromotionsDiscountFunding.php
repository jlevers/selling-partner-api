<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OfferProgramConfigurationPromotionsDiscountFunding extends BaseDto
{
    /**
     * @param  ?float  $percentage  The percentage discount on the offer.
     */
    public function __construct(
        public readonly ?float $percentage = null,
    ) {
    }
}
