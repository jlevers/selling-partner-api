<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use SellingPartnerApi\Dto;

final class LinkObject extends Dto
{
    /**
     * @param  string  $href  A URI for this object.
     * @param  ?string  $name  An identifier for this object.
     */
    public function __construct(
        public readonly string $href,
        public readonly ?string $name = null,
    ) {
    }
}
