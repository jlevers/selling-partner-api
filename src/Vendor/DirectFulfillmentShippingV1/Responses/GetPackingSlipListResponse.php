<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\PackingSlipList;

final class GetPackingSlipListResponse extends BaseResponse
{
    /**
     * @param  ?PackingSlipList  $packingSlipList A list of packing slips.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?PackingSlipList $packingSlipList = null,
        public readonly ?array $errors = null,
    ) {
    }
}
