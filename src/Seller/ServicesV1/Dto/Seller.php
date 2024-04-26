<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class Seller extends Dto
{
    /**
     * @param  ?string  $sellerId  The identifier of the seller of the service job.
     */
    public function __construct(
        public readonly ?string $sellerId = null,
    ) {
    }
}
