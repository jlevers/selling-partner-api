<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AplusResponse extends BaseDto
{
    protected static array $complexArrayTypes = ['warnings' => [Error::class]];

    /**
     * @param  Error[]  $warnings A set of messages to the user, such as warnings or comments.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?array $warnings = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
