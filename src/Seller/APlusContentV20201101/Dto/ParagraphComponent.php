<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ParagraphComponent extends BaseDto
{
    protected static array $complexArrayTypes = ['textList' => [TextItem::class]];

    /**
     * @param  TextItem[]  $textList
     */
    public function __construct(
        public readonly array $textList,
    ) {
    }
}
