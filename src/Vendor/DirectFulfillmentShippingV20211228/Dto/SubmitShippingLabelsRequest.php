<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use SellingPartnerApi\Dto;

final class SubmitShippingLabelsRequest extends Dto
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
