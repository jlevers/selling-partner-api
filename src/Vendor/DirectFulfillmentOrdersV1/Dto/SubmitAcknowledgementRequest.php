<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitAcknowledgementRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['orderAcknowledgements' => [OrderAcknowledgementItem::class]];

    /**
     * @param  OrderAcknowledgementItem[]  $orderAcknowledgements  A list of one or more purchase orders.
     */
    public function __construct(
        public readonly ?array $orderAcknowledgements = null,
    ) {
    }
}
