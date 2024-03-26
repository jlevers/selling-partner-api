<?php

namespace SellingPartnerApi\Seller\FBASmallAndLightV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SmallAndLightFeePreviewRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['items' => [Item::class]];

    /**
     * @param  string  $marketplaceId  A marketplace identifier.
     * @param  Item[]  $items  A list of items for which to retrieve fee estimates (limit: 25).
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly array $items,
    ) {
    }
}
