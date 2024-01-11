<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateFulfillmentReturnResult extends BaseDto
{
    protected static array $complexArrayTypes = [
        'returnItems' => [ReturnItem::class],
        'invalidReturnItems' => [InvalidReturnItem::class],
        'returnAuthorizations' => [ReturnAuthorization::class],
    ];

    /**
     * @param  ReturnItem[]  $returnItems An array of items that Amazon accepted for return. Returns empty if no items were accepted for return.
     * @param  InvalidReturnItem[]  $invalidReturnItems An array of invalid return item information.
     * @param  ReturnAuthorization[]  $returnAuthorizations An array of return authorization information.
     */
    public function __construct(
        public readonly ?array $returnItems = null,
        public readonly ?array $invalidReturnItems = null,
        public readonly ?array $returnAuthorizations = null,
    ) {
    }
}
