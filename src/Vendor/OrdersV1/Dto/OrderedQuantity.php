<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderedQuantity extends BaseDto
{
    protected static array $complexArrayTypes = ['orderedQuantityDetails' => [OrderedQuantityDetails::class]];

    /**
     * @param  ?ItemQuantity  $orderedQuantity  Details of quantity ordered.
     * @param  OrderedQuantityDetails[]  $orderedQuantityDetails  Details of item quantity ordered.
     */
    public function __construct(
        public readonly ?ItemQuantity $orderedQuantity = null,
        public readonly ?array $orderedQuantityDetails = null,
    ) {
    }
}
