<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\Pagination;

final class PackingSlipList extends BaseResponse
{
    /**
     * @param  PackingSlip[]  $packingSlips
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $packingSlips = null,
    ) {
    }
}
