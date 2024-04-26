<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Dto\Restriction;

final class RestrictionList extends Response
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
