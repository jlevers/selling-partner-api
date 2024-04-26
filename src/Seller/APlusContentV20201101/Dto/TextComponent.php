<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class TextComponent extends Dto
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
