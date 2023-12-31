<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class Packages extends BaseResponse
{
    /**
     * @param  Package[]  $packages
     */
    public function __construct(
        public readonly array $packages,
    ) {
    }
}
