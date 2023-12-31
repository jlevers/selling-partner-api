<?php

namespace SellingPartnerApi\Seller\FBASmallAndLightV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SmallAndLightFeePreviewRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['items' => [Item::class]];

    /**
     * @param  Item[]  $items A list of items for which to retrieve fee estimates (limit: 25).
     * @param  string  $marketplaceId A marketplace identifier.
     */
    public function __construct(
        public readonly array $items,
        public readonly string $marketplaceId,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
