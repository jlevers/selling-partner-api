<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class Pagination extends Dto
{
    /**
     * @param  ?string  $nextToken  When present, pass this string token in the next request to return the next response page.
     */
    public function __construct(
        public readonly ?string $nextToken = null,
    ) {
    }
}
