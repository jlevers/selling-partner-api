<?php

namespace SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Dto\Restriction;

final class RestrictionList extends BaseResponse
{
    protected static array $complexArrayTypes = ['restrictions' => [Restriction::class]];

    /**
     * @param  Restriction[]  $restrictions
     */
    public function __construct(
        public readonly array $restrictions,
    ) {
    }
}
