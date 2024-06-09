<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use SellingPartnerApi\Dto;

final class SubmitShippingLabelsRequest extends Dto
{
    protected static array $complexArrayTypes = ['shippingLabelRequests' => [ShippingLabelRequest::class]];

    /**
     * @param  ShippingLabelRequest[]|null  $shippingLabelRequests
     */
    public function __construct(
        public readonly ?array $shippingLabelRequests = null,
    ) {
    }
}
