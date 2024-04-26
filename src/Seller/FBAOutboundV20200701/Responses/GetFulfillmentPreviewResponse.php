<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\Error;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\GetFulfillmentPreviewResult;

final class GetFulfillmentPreviewResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?GetFulfillmentPreviewResult  $payload  A list of fulfillment order previews, including estimated shipping weights, estimated shipping fees, and estimated ship dates and arrival dates.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?GetFulfillmentPreviewResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
