<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\CatalogItemsV0\Dto\Categories;
use SellingPartnerApi\Seller\CatalogItemsV0\Dto\Error;

final class ListCatalogCategoriesResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['payload' => [Categories::class], 'errors' => [Error::class]];

    /**
     * @param  Categories[]|null  $payload
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
