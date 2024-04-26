<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use SellingPartnerApi\Dto;

final class PackingSlipList extends Dto
{
    protected static array $complexArrayTypes = ['packingSlips' => [PackingSlip::class]];

    /**
     * @param  ?Pagination  $pagination
     * @param  PackingSlip[]  $packingSlips
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $packingSlips = null,
    ) {
    }
}
