<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class HttpStatusLine extends BaseDto
{
    /**
     * @param  ?int  $statusCode  The HTTP response Status-Code.
     * @param  ?string  $reasonPhrase  The HTTP response Reason-Phase.
     */
    public function __construct(
        public readonly ?int $statusCode = null,
        public readonly ?string $reasonPhrase = null,
    ) {
    }
}
