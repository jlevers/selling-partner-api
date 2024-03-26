<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PackageDimensions extends BaseDto
{
    protected static array $attributeMap = [
        'length' => 'Length',
        'width' => 'Width',
        'height' => 'Height',
        'unit' => 'Unit',
        'predefinedPackageDimensions' => 'PredefinedPackageDimensions',
    ];

    /**
     * @param  ?float  $length
     * @param  ?float  $width
     * @param  ?float  $height
     * @param  ?string  $unit  The unit of length.
     * @param  ?string  $predefinedPackageDimensions  An enumeration of predefined parcel tokens. If you specify a PredefinedPackageDimensions token, you are not obligated to use a branded package from a carrier. For example, if you specify the FedEx_Box_10kg token, you do not have to use that particular package from FedEx. You are only obligated to use a box that matches the dimensions specified by the token.
     *
     * Note: Please note that carriers can have restrictions on the type of package allowed for certain ship methods. Check the carrier website for all details. Example: Flat rate pricing is available when materials are sent by USPS in a USPS-produced Flat Rate Envelope or Box.
     */
    public function __construct(
        public readonly ?float $length = null,
        public readonly ?float $width = null,
        public readonly ?float $height = null,
        public readonly ?string $unit = null,
        public readonly ?string $predefinedPackageDimensions = null,
    ) {
    }
}
