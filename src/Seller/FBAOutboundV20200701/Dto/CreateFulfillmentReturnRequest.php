<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class CreateFulfillmentReturnRequest extends Dto
{
    protected static array $complexArrayTypes = ['items' => [CreateReturnItem::class]];

    /**
     * @param  CreateReturnItem[]  $items  An array of items to be returned.
     */
    public function __construct(
        public readonly array $items,
    ) {
    }
}
