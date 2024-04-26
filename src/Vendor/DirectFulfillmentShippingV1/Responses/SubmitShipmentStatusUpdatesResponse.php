<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\Error;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\TransactionReference;

final class SubmitShipmentStatusUpdatesResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?TransactionReference  $payload
     * @param  Error[]  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?TransactionReference $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
