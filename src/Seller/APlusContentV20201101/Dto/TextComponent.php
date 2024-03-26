<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TextComponent extends BaseDto
{
    protected static array $complexArrayTypes = ['decoratorSet' => [Decorator::class]];

    /**
     * @param  string  $value  The actual plain text.
     * @param  Decorator[]|null  $decoratorSet  A set of content decorators.
     */
    public function __construct(
        public readonly string $value,
        public readonly ?array $decoratorSet = null,
    ) {
    }
}
