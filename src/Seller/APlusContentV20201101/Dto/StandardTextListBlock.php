<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardTextListBlock extends BaseDto
{
    protected static array $complexArrayTypes = ['textList' => [TextItem::class]];

    /**
     * @param  TextItem[]  $textList
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?array $textList = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
