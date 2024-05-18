<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class NonPartneredSmallParcelDataOutput extends Dto
{
    protected static array $attributeMap = ['packageList' => 'PackageList'];

    protected static array $complexArrayTypes = ['packageList' => [NonPartneredSmallParcelPackageOutput::class]];

    /**
     * @param  NonPartneredSmallParcelPackageOutput[]  $packageList  A list of packages, including carrier, tracking number, and status information for each package.
     */
    public function __construct(
        public readonly array $packageList,
    ) {
    }
}