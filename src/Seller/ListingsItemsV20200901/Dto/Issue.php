<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20200901\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Issue extends BaseDto
{
    /**
     * @param  string  $code  An issue code that identifies the type of issue.
     * @param  string  $message  A message that describes the issue.
     * @param  string  $severity  The severity of the issue.
     * @param  ?string  $attributeName  Name of the attribute associated with the issue, if applicable.
     */
    public function __construct(
        public readonly string $code,
        public readonly string $message,
        public readonly string $severity,
        public readonly ?string $attributeName = null,
    ) {
    }
}
