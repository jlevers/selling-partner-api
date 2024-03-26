<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdateScheduledPackagesRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['updatePackageDetailsList' => [UpdatePackageDetails::class]];

    /**
     * @param  string  $marketplaceId  A string of up to 255 characters.
     * @param  UpdatePackageDetails[]  $updatePackageDetailsList  A list of package update details.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly array $updatePackageDetailsList,
    ) {
    }
}
