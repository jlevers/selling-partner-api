<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use SellingPartnerApi\Dto;

final class OfferProgramConfigurationPromotionsDiscountFunding extends Dto
{
    /**
     * @param  ?float  $percentage  The percentage discount on the offer.
     */
    public function __construct(
        public readonly ?float $percentage = null,
    ) {
    }
}
