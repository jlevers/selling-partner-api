<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Dto\SupplySourceList;

final class GetSupplySourcesResponse extends Response
{
    /**
     * @param  ?SupplySourceList  $supplySources
     * @param  ?string  $nextPageToken  If present, use this pagination token to retrieve the next page of supply sources.
     */
    public function __construct(
        public readonly ?SupplySourceList $supplySources = null,
        public readonly ?string $nextPageToken = null,
    ) {
    }
}
