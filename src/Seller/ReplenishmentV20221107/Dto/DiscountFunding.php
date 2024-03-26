<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DiscountFunding extends BaseDto
{
    /**
     * @param  float[]|null  $percentage  Filters the results to only include offers with the percentage specified.
     */
    public function __construct(
        public readonly ?array $percentage = null,
    ) {
    }
}
