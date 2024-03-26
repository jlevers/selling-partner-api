<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ScopeOfWork extends BaseDto
{
    /**
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the service job.
     * @param  ?string  $title  The title of the service job.
     * @param  ?int  $quantity  The number of service jobs.
     * @param  ?string[]  $requiredSkills  A list of skills required to perform the job.
     */
    public function __construct(
        public readonly ?string $asin = null,
        public readonly ?string $title = null,
        public readonly ?int $quantity = null,
        public readonly ?array $requiredSkills = null,
    ) {
    }
}
