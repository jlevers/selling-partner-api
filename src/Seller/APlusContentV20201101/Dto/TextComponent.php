<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class TextComponent extends Dto
{
    protected static array $complexArrayTypes = ['decoratorSet' => Decorator::class];

    /**
     * @param  string  $value  The actual plain text.
     * @param  Decorator[]|null  $decoratorSet  A set of content decorators.
     */
    public function __construct(
        public string $value,
        public ?array $decoratorSet = null,
    ) {}
}
