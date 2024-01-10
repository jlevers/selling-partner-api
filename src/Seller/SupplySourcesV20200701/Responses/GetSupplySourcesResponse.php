<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class GetSupplySourcesResponse extends BaseResponse
{
    /**
     * @param  SupplySource[]  $supplySources The list of `SupplySource`s.
     * @param  ?string  $nextPageToken If present, use this pagination token to retrieve the next page of supply sources.
     */
    public function __construct(
        public readonly ?array $supplySources = null,
        public readonly ?string $nextPageToken = null,
    ) {
    }
}
