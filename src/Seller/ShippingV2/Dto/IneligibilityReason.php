<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class IneligibilityReason extends BaseDto
{
    /**
     * @param  string  $code  Reasons that make a shipment service offering ineligible.
     * @param  string  $message  The ineligibility reason.
     */
    public function __construct(
        public readonly string $code,
        public readonly string $message,
    ) {
    }
}
