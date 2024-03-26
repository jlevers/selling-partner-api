<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Warning extends BaseDto
{
    /**
     * @param  string  $code  An warning code that identifies the type of warning that occurred.
     * @param  string  $message  A message that describes the warning condition in a human-readable form.
     * @param  ?string  $details  Additional details that can help the caller understand or address the warning.
     */
    public function __construct(
        public readonly string $code,
        public readonly string $message,
        public readonly ?string $details = null,
    ) {
    }
}
