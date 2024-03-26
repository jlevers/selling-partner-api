<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardCompanyLogoModule extends BaseDto
{
    /**
     * @param  ImageComponent  $companyLogo  A reference to an image, hosted in the A+ Content media library.
     */
    public function __construct(
        public readonly ImageComponent $companyLogo,
    ) {
    }
}
