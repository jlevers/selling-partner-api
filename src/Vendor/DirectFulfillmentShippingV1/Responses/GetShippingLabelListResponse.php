<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\ShippingLabelList;

final class GetShippingLabelListResponse extends BaseResponse
{
    /**
     * @param  ?ShippingLabelList  $shippingLabelList
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ShippingLabelList $shippingLabelList = null,
        public readonly ?array $errors = null,
    ) {
    }
}
