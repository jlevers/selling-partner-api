<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\Pagination;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\ShippingLabel;

final class ShippingLabelList extends BaseResponse
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
