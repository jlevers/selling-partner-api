<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class ItemBrowseClassification extends Dto
{
    /**
     * @param  string  $displayName  Display name for the classification.
     * @param  string  $classificationId  Identifier of the classification (browse node identifier).
     */
    public function __construct(
        public readonly string $displayName,
        public readonly string $classificationId,
    ) {
    }
}
