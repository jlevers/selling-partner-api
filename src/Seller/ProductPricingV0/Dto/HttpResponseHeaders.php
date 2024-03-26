<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class HttpResponseHeaders extends BaseDto
{
    /** @var string[] */
    public array $additionalProperties;

    protected static array $attributeMap = ['date' => 'Date', 'xAmznRequestId' => 'x-amzn-RequestId'];

    /**
     * @param  ?string  $date  The timestamp that the API request was received.  For more information, consult [RFC 2616 Section 14](https://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html).
     * @param  ?string  $xAmznRequestId  Unique request reference ID.
     * @param  ?string  $additionalProperties
     */
    public function __construct(
        public readonly ?string $date = null,
        public readonly ?string $xAmznRequestId = null,
        ?string ...$additionalProperties,
    ) {
        $this->additionalProperties = $additionalProperties;
    }
}
