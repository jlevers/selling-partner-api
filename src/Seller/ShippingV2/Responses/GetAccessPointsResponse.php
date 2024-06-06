<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ShippingV2\Dto\GetAccessPointsResult;

final class GetAccessPointsResponse extends Response
{
    /**
     * @param  ?GetAccessPointsResult  $payload  The payload for the GetAccessPoints API.
     */
    public function __construct(
        public readonly ?GetAccessPointsResult $payload = null,
    ) {
    }
}
