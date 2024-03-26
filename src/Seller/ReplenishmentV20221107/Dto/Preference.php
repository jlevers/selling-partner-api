<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Preference extends BaseDto
{
    /**
     * @param  ?string[]  $autoEnrollment  Filters the results to only include offers with the auto-enrollment preference specified.
     */
    public function __construct(
        public readonly ?array $autoEnrollment = null,
    ) {
    }
}
