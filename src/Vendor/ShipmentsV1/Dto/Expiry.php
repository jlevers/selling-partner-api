<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Expiry extends BaseDto
{
    /**
     * @param  ?string  $manufacturerDate Production, packaging or assembly date determined by the manufacturer. Its meaning is determined based on the trade item context.
     * @param  ?string  $expiryDate The date that determines the limit of consumption or use of a product. Its meaning is determined based on the trade item context.
     * @param  ?Duration  $expiryAfterDuration
     */
    public function __construct(
        public readonly ?string $manufacturerDate = null,
        public readonly ?string $expiryDate = null,
        public readonly ?Duration $expiryAfterDuration = null,
    ) {
    }
}
