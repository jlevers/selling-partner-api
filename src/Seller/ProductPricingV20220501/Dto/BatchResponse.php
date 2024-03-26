<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class BatchResponse extends BaseDto
{
    /**
     * @param  string[]  $headers  A mapping of additional HTTP headers to send/receive for an individual request within a batch.
     * @param  HttpStatusLine  $status  The HTTP status line associated with the response to an individual request within a batch. For more information, consult [RFC 2616](https://www.w3.org/Protocols/rfc2616/rfc2616-sec6.html).
     */
    public function __construct(
        public readonly array $headers,
        public readonly HttpStatusLine $status,
    ) {
    }
}
