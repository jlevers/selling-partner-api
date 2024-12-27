<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class BatchResponse extends Dto
{
    /**
     * @param  string[]  $headers  A mapping of additional HTTP headers to send or receive for an individual request within a batch.
     * @param  HttpStatusLine  $status  The HTTP status line associated with the response for an individual request within a batch. For more information, refer to [RFC 2616](https://www.w3.org/Protocols/rfc2616/rfc2616-sec6.html).
     */
    public function __construct(
        public array $headers,
        public HttpStatusLine $status,
    ) {}
}
