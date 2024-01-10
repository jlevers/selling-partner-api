<?php

namespace SellingPartnerApi\Seller\SolicitationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Schema extends BaseDto
{
    /**
     * @param  ?array  $additionalProperties
     */
    public function __construct(?array ...$additionalProperties)
    {
        parent::__construct(...$additionalProperties);
    }
}
