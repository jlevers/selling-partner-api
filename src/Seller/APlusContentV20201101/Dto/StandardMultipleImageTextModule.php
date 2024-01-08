<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardMultipleImageTextModule extends BaseDto
{
    protected static array $complexArrayTypes = ['blocks' => [StandardImageTextCaptionBlock::class]];

    /**
     * @param  StandardImageTextCaptionBlock[]  $blocks
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?array $blocks = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
