<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;
use SellingPartnerApi\Seller\ProductPricingV0\Responses\GetOffersResponse;

final class ItemOffersResponse extends BaseDto
{
    /**
     * @param  GetOffersResponse  $body  The response schema for the `getListingOffers` and `getItemOffers` operations.
     * @param  ?HttpResponseHeaders  $headers  A mapping of additional HTTP headers to send/receive for the individual batch request.
     * @param  ?GetOffersHttpStatusLine  $status  The HTTP status line associated with the response.  For more information, consult [RFC 2616](https://www.w3.org/Protocols/rfc2616/rfc2616-sec6.html).
     */
    public function __construct(
        public readonly GetOffersResponse $body,
        public readonly ItemOffersRequestParams $request,
        public readonly ?HttpResponseHeaders $headers = null,
        public readonly ?GetOffersHttpStatusLine $status = null,
    ) {
    }
}
