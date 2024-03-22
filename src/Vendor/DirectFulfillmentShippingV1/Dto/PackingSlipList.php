<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PackingSlipList extends BaseDto
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
