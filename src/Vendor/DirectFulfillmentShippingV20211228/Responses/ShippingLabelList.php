<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\Pagination;

final class ShippingLabelList extends BaseResponse
{
    /**
     * @param  ShippingLabel[]  $shippingLabels
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $shippingLabels = null,
    ) {
    }
}
