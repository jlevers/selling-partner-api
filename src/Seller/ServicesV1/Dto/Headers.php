<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Headers extends BaseDto
{
    /**
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(mixed ...$additionalProperties)
    {
        parent::__construct(...$additionalProperties);
    }
}
