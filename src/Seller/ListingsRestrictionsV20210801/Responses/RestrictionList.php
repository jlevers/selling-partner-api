<?php

namespace SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class RestrictionList extends BaseResponse
{
    /**
     * @param  ?Restriction[]  $restrictions
     */
    public function __construct(
        public readonly ?array $restrictions = null,
    ) {
    }
}
