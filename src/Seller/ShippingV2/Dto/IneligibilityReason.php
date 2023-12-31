<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class IneligibilityReason extends BaseDto
{
    /**
     * @param  string  $message The ineligibility reason.
     * @param  string  $ineligibilityReasonCode Reasons that make a shipment service offering ineligible.
     */
    public function __construct(
        public readonly string $message,
        public readonly ?string $ineligibilityReasonCode = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
