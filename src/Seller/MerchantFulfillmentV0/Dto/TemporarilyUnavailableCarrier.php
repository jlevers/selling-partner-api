<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TemporarilyUnavailableCarrier extends BaseDto
{
    /**
     * @param  string  $carrierName The name of the carrier.
     */
    public function __construct(
        public readonly string $carrierName,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
