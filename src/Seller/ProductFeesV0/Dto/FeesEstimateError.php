<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeesEstimateError extends BaseDto
{
    /**
     * @param  string  $type An error type, identifying either the receiver or the sender as the originator of the error.
     * @param  string  $code An error code that identifies the type of error that occurred.
     * @param  string  $message A message that describes the error condition.
     * @param  ?array[]  $detail Additional information that can help the caller understand or fix the issue.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $type,
        public readonly string $code,
        public readonly string $message,
        public readonly ?array $detail = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
