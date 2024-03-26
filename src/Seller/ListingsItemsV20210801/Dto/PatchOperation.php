<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PatchOperation extends BaseDto
{
    /**
     * @param  string  $op  Type of JSON Patch operation. Supported JSON Patch operations include add, replace, and delete. See <https://tools.ietf.org/html/rfc6902>.
     * @param  string  $path  JSON Pointer path of the element to patch. See <https://tools.ietf.org/html/rfc6902>.
     * @param  mixed[][]|null  $value  JSON value to add, replace, or delete.
     */
    public function __construct(
        public readonly string $op,
        public readonly string $path,
        public readonly ?array $value = null,
    ) {
    }
}
