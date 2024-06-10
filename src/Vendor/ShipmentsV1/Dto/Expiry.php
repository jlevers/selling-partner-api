<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class Expiry extends Dto
{
    /**
     * @param  ?\DateTimeInterface  $manufacturerDate  Production, packaging or assembly date determined by the manufacturer. Its meaning is determined based on the trade item context.
     * @param  ?\DateTimeInterface  $expiryDate  The date that determines the limit of consumption or use of a product. Its meaning is determined based on the trade item context.
     * @param  ?Duration  $expiryAfterDuration  Duration after manufacturing date during which the product is valid for consumption.
     */
    public function __construct(
        public readonly ?\DateTimeInterface $manufacturerDate = null,
        public readonly ?\DateTimeInterface $expiryDate = null,
        public readonly ?Duration $expiryAfterDuration = null,
    ) {
    }
}
