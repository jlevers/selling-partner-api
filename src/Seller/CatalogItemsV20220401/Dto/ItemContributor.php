<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemContributor extends BaseDto
{
    /**
     * @param  string  $value Name of the contributor, such as Jane Austen.
     * @param  ItemContributorRole  $role Role of an individual contributor in the creation of an item, such as author or actor.
     */
    public function __construct(
        public readonly string $value,
        public readonly ItemContributorRole $role,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
