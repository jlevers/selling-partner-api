<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\CatalogItemsV0\Dto\Error;
use SellingPartnerApi\Seller\CatalogItemsV0\Dto\Item;

final class GetCatalogItemResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?Item  $payload  An item in the Amazon catalog.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Item $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
