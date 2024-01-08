<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ParagraphComponent extends BaseDto
{
    protected static array $complexArrayTypes = ['textList' => [TextComponent::class]];

    /**
     * @param  TextComponent[]  $textList
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?array $textList = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
