<?php

namespace SellingPartnerApi\Seller\DataKioskV20231115\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Pagination extends BaseDto
{
    /**
     * @param  ?string  $nextToken A token that can be used to fetch the next page of results.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $nextToken = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
