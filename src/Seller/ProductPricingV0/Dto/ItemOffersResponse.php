<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use SellingPartnerApi\Dto;
use SellingPartnerApi\Seller\ProductPricingV0\Responses\GetOffersResponse;

final class ItemOffersResponse extends Dto
{
    /**
     * @param  GetOffersResponse  $body  The response schema for the `getListingOffers` and `getItemOffers` operations.
     * @param  ItemOffersRequestParams  $request  List of request parameters that can be accepted by `ItemOffersRequest`
     * @param  ?HttpResponseHeaders  $headers  A mapping of additional HTTP headers to send/receive for the individual batch request.
     * @param  ?GetOffersHttpStatusLine  $status  The HTTP status line associated with the response.  For more information, consult [RFC 2616](https://www.w3.org/Protocols/rfc2616/rfc2616-sec6.html).
     */
    public function __construct(
        public GetOffersResponse $body,
        public ItemOffersRequestParams $request,
        public ?HttpResponseHeaders $headers = null,
        public ?GetOffersHttpStatusLine $status = null,
    ) {}
}
