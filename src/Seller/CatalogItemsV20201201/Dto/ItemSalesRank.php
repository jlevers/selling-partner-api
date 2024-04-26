<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use SellingPartnerApi\Dto;

final class ItemSalesRank extends Dto
{
    /**
     * @param  string  $title  Title, or name, of the sales rank.
     * @param  int  $rank  Sales rank value.
     * @param  ?string  $link  Corresponding Amazon retail website link, or URL, for the sales rank.
     */
    public function __construct(
        public readonly string $title,
        public readonly int $rank,
        public readonly ?string $link = null,
    ) {
    }
}
