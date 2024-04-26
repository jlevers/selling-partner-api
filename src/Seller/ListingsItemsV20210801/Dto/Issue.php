<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use SellingPartnerApi\Dto;

final class Issue extends Dto
{
    /**
     * @param  string  $code  An issue code that identifies the type of issue.
     * @param  string  $message  A message that describes the issue.
     * @param  string  $severity  The severity of the issue.
     * @param  ?string[]  $attributeNames  Names of the attributes associated with the issue, if applicable.
     */
    public function __construct(
        public readonly string $code,
        public readonly string $message,
        public readonly string $severity,
        public readonly ?array $attributeNames = null,
    ) {
    }
}
