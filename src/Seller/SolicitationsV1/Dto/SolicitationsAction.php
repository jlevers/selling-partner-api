<?php

namespace SellingPartnerApi\Seller\SolicitationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SolicitationsAction extends BaseDto
{
    /**
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $name,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
