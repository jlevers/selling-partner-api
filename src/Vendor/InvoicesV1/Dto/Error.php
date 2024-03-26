<?php

namespace SellingPartnerApi\Vendor\InvoicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Error extends BaseDto
{
    /**
     * @param  string  $code  An error code that identifies the type of error that occurred.
     * @param  string  $message  A message that describes the error condition.
     * @param  ?string  $details  Additional details that can help the caller understand or fix the issue.
     */
    public function __construct(
        public readonly string $code,
        public readonly string $message,
        public readonly ?string $details = null,
    ) {
    }
}
