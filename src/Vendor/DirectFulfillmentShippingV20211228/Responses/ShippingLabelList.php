<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\Pagination;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\ShippingLabel;

final class ShippingLabelList extends Response
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
