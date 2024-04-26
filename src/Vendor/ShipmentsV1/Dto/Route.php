<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class Route extends Dto
{
    protected static array $complexArrayTypes = ['stops' => [Stop::class]];

    /**
     * @param  Stop[]  $stops
     */
    public function __construct(
        public readonly ?array $stops = null,
    ) {
    }
}
