<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Error extends BaseDto
{
    /**
     * @param  string  $code  The code that identifies the type of error condition.
     * @param  string  $message  A human readable description of the error condition.
     * @param  ?string  $details  Additional information, if available, to clarify the error condition.
     */
    public function __construct(
        public readonly string $code,
        public readonly string $message,
        public readonly ?string $details = null,
    ) {
    }
}
