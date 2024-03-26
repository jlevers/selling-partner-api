<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class NonPartneredSmallParcelDataInput extends BaseDto
{
    protected static array $attributeMap = ['carrierName' => 'CarrierName', 'packageList' => 'PackageList'];

    protected static array $complexArrayTypes = ['packageList' => [NonPartneredSmallParcelPackageInput::class]];

    /**
     * @param  string  $carrierName  The carrier that you are using for the inbound shipment.
     * @param  NonPartneredSmallParcelPackageInput[]  $packageList  A list of package tracking information.
     */
    public function __construct(
        public readonly string $carrierName,
        public readonly array $packageList,
    ) {
    }
}
