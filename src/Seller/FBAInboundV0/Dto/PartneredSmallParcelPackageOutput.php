<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartneredSmallParcelPackageOutput extends BaseDto
{
    protected static array $attributeMap = [
        'dimensions' => 'Dimensions',
        'weight' => 'Weight',
        'carrierName' => 'CarrierName',
        'trackingId' => 'TrackingId',
        'packageStatus' => 'PackageStatus',
    ];

    /**
     * @param  Dimensions  $dimensions  The dimension values and unit of measurement.
     * @param  Weight  $weight  The weight of the package.
     * @param  string  $carrierName  The carrier specified with a previous call to putTransportDetails.
     * @param  string  $trackingId  The tracking number of the package, provided by the carrier.
     * @param  string  $packageStatus  The shipment status of the package.
     */
    public function __construct(
        public readonly Dimensions $dimensions,
        public readonly Weight $weight,
        public readonly string $carrierName,
        public readonly string $trackingId,
        public readonly string $packageStatus,
    ) {
    }
}
