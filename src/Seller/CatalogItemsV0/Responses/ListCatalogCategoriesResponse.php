<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class ListCatalogCategoriesResponse extends BaseResponse
{
    /**
     * @param  Categories[]  $payload
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly array $payload,
        public readonly array $errors,
    ) {
    }
}
