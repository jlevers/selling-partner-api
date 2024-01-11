<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\ShippingLabel;

final class GetShippingLabelResponse extends BaseResponse
{
    /**
     * @param  ?ShippingLabel  $shippingLabel
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ShippingLabel $shippingLabel = null,
        public readonly ?array $errors = null,
    ) {
    }
}
