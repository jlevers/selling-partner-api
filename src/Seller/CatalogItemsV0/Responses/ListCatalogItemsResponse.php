<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\CatalogItemsV0\Dto\Error;
use SellingPartnerApi\Seller\CatalogItemsV0\Dto\ListMatchingItemsResponse;

final class ListCatalogItemsResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?ListMatchingItemsResponse  $payload
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ListMatchingItemsResponse $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
