<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Seller extends BaseDto
{
    /**
     * @param  ?string  $sellerId The identifier of the seller of the service job.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $sellerId = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
