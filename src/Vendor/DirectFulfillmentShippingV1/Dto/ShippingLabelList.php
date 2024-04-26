<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use SellingPartnerApi\Dto;

final class ShippingLabelList extends Dto
{
    protected static array $complexArrayTypes = ['shippingLabels' => [ShippingLabel::class]];

    /**
     * @param  ?Pagination  $pagination
     * @param  ShippingLabel[]  $shippingLabels
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $shippingLabels = null,
    ) {
    }
}
