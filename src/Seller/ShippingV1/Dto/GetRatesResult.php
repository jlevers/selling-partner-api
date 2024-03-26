<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetRatesResult extends BaseDto
{
    protected static array $complexArrayTypes = ['serviceRates' => [ServiceRate::class]];

    /**
     * @param  ServiceRate[]  $serviceRates  A list of service rates.
     */
    public function __construct(
        public readonly array $serviceRates,
    ) {
    }
}
