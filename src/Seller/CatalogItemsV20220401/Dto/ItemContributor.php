<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemContributor extends BaseDto
{
    /**
     * @param  ItemContributorRole  $role  Role of an individual contributor in the creation of an item, such as author or actor.
     * @param  string  $value  Name of the contributor, such as Jane Austen.
     */
    public function __construct(
        public readonly ItemContributorRole $role,
        public readonly string $value,
    ) {
    }
}
