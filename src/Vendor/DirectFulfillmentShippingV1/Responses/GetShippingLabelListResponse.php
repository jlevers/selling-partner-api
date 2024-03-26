<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\Error;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\ShippingLabelList;

final class GetShippingLabelListResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?ShippingLabelList  $payload
     * @param  Error[]  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ShippingLabelList $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
