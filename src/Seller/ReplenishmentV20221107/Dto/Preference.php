<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use SellingPartnerApi\Dto;

final class Preference extends Dto
{
    /**
     * @param  ?string[]  $autoEnrollment  Filters the results to only include offers with the auto-enrollment preference specified.
     */
    public function __construct(
        public readonly ?array $autoEnrollment = null,
    ) {
    }
}
