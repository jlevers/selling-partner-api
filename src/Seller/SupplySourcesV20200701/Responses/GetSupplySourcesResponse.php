<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Dto\SupplySourceList;

final class GetSupplySourcesResponse extends BaseResponse
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
