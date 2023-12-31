<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class IneligibleRate extends BaseDto
{
    protected static array $complexArrayTypes = ['ineligibilityReasons' => [IneligibilityReason::class]];

    /**
     * @param  IneligibilityReason[]  $ineligibilityReasons A list of reasons why a shipping service offering is ineligible.
     * @param  string  $serviceId An identifier for the shipping service.
     * @param  string  $serviceName The name of the shipping service.
     * @param  string  $carrierName The carrier name for the offering.
     * @param  string  $carrierId The carrier identifier for the offering, provided by the carrier.
     */
    public function __construct(
        public readonly array $ineligibilityReasons,
        public readonly ?string $serviceId = null,
        public readonly ?string $serviceName = null,
        public readonly ?string $carrierName = null,
        public readonly ?string $carrierId = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
