<?php

namespace SellingPartnerApi\Seller\SolicitationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LinkObject extends BaseDto
{
    /**
     * @param  string  $href  A URI for this object.
     * @param  ?string  $name  An identifier for this object.
     */
    public function __construct(
        public readonly string $href,
        public readonly ?string $name = null,
    ) {
    }
}
