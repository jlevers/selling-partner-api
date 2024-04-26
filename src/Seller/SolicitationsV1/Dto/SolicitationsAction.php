<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SolicitationsV1\Dto;

use SellingPartnerApi\Dto;

final class SolicitationsAction extends Dto
{
    public function __construct(
        public readonly string $name,
    ) {
    }
}
