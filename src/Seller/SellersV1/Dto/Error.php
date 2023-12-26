<?php

namespace SellingPartnerApi\Seller\SellersV1\Dto;

class Error
{
    /**
     * @param  string  $code An error code that identifies the type of error that occured.
     * @param  string  $message A message that describes the error condition in a human-readable form.
     * @param  string  $details Additional details that can help the caller understand or fix the issue.
     */
    public function __construct(
        public string $code,
        public string $message,
        public string $details,
    ) {
    }
}
