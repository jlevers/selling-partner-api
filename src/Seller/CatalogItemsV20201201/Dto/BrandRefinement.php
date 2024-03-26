<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class BrandRefinement extends BaseDto
{
    /**
     * @param  int  $numberOfResults  The estimated number of results that would still be returned if refinement key applied.
     * @param  string  $brandName  Brand name. For display and can be used as a search refinement.
     */
    public function __construct(
        public readonly int $numberOfResults,
        public readonly string $brandName,
    ) {
    }
}
