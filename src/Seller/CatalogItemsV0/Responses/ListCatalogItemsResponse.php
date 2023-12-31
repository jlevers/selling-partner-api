<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\CatalogItemsV0\Dto\ListMatchingItemsResponse;

final class ListCatalogItemsResponse extends BaseResponse
{
    /**
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ListMatchingItemsResponse $payload,
        public readonly array $errors,
    ) {
    }
}
