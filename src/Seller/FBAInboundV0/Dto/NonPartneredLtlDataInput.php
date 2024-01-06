<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class NonPartneredLtlDataInput extends BaseDto
{
    /**
     * @param  string  $carrierName The carrier that you are using for the inbound shipment.
     * @param  string  $proNumber The PRO number ("progressive number" or "progressive ID") assigned to the shipment by the carrier.
     */
    public function __construct(
        public readonly ?string $carrierName = null,
        public readonly ?string $proNumber = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
