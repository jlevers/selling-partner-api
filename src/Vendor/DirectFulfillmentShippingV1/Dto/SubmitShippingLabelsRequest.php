<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitShippingLabelsRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['shippingLabelRequests' => [ShippingLabelRequest::class]];

    /**
     * @param  ShippingLabelRequest[]  $shippingLabelRequests
     */
    public function __construct(
        public readonly ?array $shippingLabelRequests = null,
    ) {
    }
}
