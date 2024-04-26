<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardCompanyLogoModule extends Dto
{
    /**
     * @param  ImageComponent  $companyLogo  A reference to an image, hosted in the A+ Content media library.
     */
    public function __construct(
        public readonly ImageComponent $companyLogo,
    ) {
    }
}
