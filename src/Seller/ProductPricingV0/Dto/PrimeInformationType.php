<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PrimeInformationType extends BaseDto
{
    /**
     * @param  bool  $isPrime Indicates whether the offer is an Amazon Prime offer.
     * @param  bool  $isNationalPrime Indicates whether the offer is an Amazon Prime offer throughout the entire marketplace where it is listed.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly bool $isPrime,
        public readonly bool $isNationalPrime,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
