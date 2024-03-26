<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemBrowseClassification extends BaseDto
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
