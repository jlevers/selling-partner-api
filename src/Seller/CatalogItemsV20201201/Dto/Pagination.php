<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Pagination extends BaseDto
{
    /**
     * @param  ?string  $nextToken  A token that can be used to fetch the next page.
     * @param  ?string  $previousToken  A token that can be used to fetch the previous page.
     */
    public function __construct(
        public readonly ?string $nextToken = null,
        public readonly ?string $previousToken = null,
    ) {
    }
}
