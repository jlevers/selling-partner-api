<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use SellingPartnerApi\Dto;

final class SubmitAcknowledgementRequest extends Dto
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
