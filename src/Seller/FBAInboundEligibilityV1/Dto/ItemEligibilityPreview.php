<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundEligibilityV1\Dto;

use SellingPartnerApi\Dto;

final class ItemEligibilityPreview extends Dto
{
    /**
     * @param  string  $asin  The ASIN for which eligibility was determined.
     * @param  string  $program  The program for which eligibility was determined.
     * @param  bool  $isEligibleForProgram  Indicates if the item is eligible for the program.
     * @param  ?string  $marketplaceId  The marketplace for which eligibility was determined.
     * @param  ?string[]  $ineligibilityReasonList  Potential Ineligibility Reason Codes.
     */
    public function __construct(
        public readonly string $asin,
        public readonly string $program,
        public readonly bool $isEligibleForProgram,
        public readonly ?string $marketplaceId = null,
        public readonly ?array $ineligibilityReasonList = null,
    ) {
    }
}
