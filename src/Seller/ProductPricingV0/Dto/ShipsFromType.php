<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use SellingPartnerApi\Dto;

final class ShipsFromType extends Dto
{
    protected static array $attributeMap = ['state' => 'State', 'country' => 'Country'];

    /**
     * @param  ?string  $state  The state from where the item is shipped.
     * @param  ?string  $country  The country from where the item is shipped.
     */
    public function __construct(
        public readonly ?string $state = null,
        public readonly ?string $country = null,
    ) {
    }
}