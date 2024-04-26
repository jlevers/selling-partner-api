<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use SellingPartnerApi\Dto;

final class UpdateScheduledPackagesRequest extends Dto
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
