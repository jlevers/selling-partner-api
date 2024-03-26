<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetOffersHttpStatusLine extends BaseDto
{
    /**
     * @param  ?int  $statusCode  The HTTP response Status Code.
     * @param  ?string  $reasonPhrase  The HTTP response Reason-Phase.
     */
    public function __construct(
        public readonly ?int $statusCode = null,
        public readonly ?string $reasonPhrase = null,
    ) {
    }
}
