<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class NonPartneredSmallParcelPackageInput extends BaseDto
{
    protected static array $attributeMap = ['trackingId' => 'TrackingId'];

    /**
     * @param  string  $trackingId  The tracking number of the package, provided by the carrier.
     */
    public function __construct(
        public readonly string $trackingId,
    ) {
    }
}
