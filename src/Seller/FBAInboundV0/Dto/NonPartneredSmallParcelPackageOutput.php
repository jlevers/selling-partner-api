<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class NonPartneredSmallParcelPackageOutput extends BaseDto
{
    /**
     * @param  string  $carrierName The carrier that you are using for the inbound shipment.
     * @param  string  $trackingId The tracking number of the package, provided by the carrier.
     * @param  string  $packageStatus The shipment status of the package.
     */
    public function __construct(
        public readonly string $carrierName,
        public readonly string $trackingId,
        public readonly string $packageStatus,
    ) {
    }
}
