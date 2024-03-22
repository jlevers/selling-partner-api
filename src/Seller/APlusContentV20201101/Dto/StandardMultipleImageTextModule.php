<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardMultipleImageTextModule extends BaseDto
{
    protected static array $complexArrayTypes = ['blocks' => [StandardImageTextCaptionBlock::class]];

    /**
     * @param  StandardImageTextCaptionBlock[]|null  $blocks
     */
    public function __construct(
        public readonly ?array $blocks = null,
    ) {
    }
}
