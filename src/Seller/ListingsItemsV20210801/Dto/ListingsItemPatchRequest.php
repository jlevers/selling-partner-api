<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ListingsItemPatchRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['patches' => [PatchOperation::class]];

    /**
     * @param  string  $productType  The Amazon product type of the listings item.
     * @param  PatchOperation[]  $patches  One or more JSON Patch operations to perform on the listings item.
     */
    public function __construct(
        public readonly string $productType,
        public readonly array $patches,
    ) {
    }
}
