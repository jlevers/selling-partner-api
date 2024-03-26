<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateFulfillmentReturnRequest extends BaseDto
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
