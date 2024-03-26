<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartneredSmallParcelDataOutput extends BaseDto
{
    protected static array $attributeMap = ['packageList' => 'PackageList', 'partneredEstimate' => 'PartneredEstimate'];

    protected static array $complexArrayTypes = ['packageList' => [PartneredSmallParcelPackageOutput::class]];

    /**
     * @param  PartneredSmallParcelPackageOutput[]  $packageList  A list of packages, including shipping information from the Amazon-partnered carrier.
     * @param  ?PartneredEstimate  $partneredEstimate  The estimated shipping cost for a shipment using an Amazon-partnered carrier.
     */
    public function __construct(
        public readonly array $packageList,
        public readonly ?PartneredEstimate $partneredEstimate = null,
    ) {
    }
}
