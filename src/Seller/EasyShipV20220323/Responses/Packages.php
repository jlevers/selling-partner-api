<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\EasyShipV20220323\Dto\Package;

final class Packages extends BaseResponse
{
    protected static array $complexArrayTypes = ['packages' => [Package::class]];

    /**
     * @param  Package[]  $packages
     */
    public function __construct(
        public readonly array $packages,
    ) {
    }
}
