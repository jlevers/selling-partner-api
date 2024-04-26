<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class ItemContributorRole extends Dto
{
    /**
     * @param  string  $value  Role value for the Amazon catalog item, such as author or actor.
     * @param  ?string  $displayName  Display name of the role in the requested locale, such as Author or Actor.
     */
    public function __construct(
        public readonly string $value,
        public readonly ?string $displayName = null,
    ) {
    }
}
