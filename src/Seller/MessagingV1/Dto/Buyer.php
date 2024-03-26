<?php

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Buyer extends BaseDto
{
    /**
     * @param  ?string  $locale  The buyer's language of preference, indicated with a locale-specific language tag. Examples: "en-US", "zh-CN", and "en-GB".
     */
    public function __construct(
        public readonly ?string $locale = null,
    ) {
    }
}
