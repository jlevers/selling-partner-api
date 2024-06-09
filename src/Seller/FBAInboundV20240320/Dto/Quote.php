<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class Quote extends Dto
{
    /**
     * @param  Currency  $cost  Currency definition.
     * @param  ?DateTime  $expiration  The timestamp at which this transportation option quote becomes no longer valid. This is based in ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     * @param  ?DateTime  $voidableUntil  Voidable until timestamp.
     */
    public function __construct(
        public readonly Currency $cost,
        public readonly ?\DateTime $expiration = null,
        public readonly ?\DateTime $voidableUntil = null,
    ) {
    }
}
