<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\ShipmentsV1\Dto\Error;
use SellingPartnerApi\Vendor\ShipmentsV1\Dto\TransactionReference;

final class SubmitShipmentConfirmationsResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?TransactionReference  $payload  The response payload for the SubmitShipmentConfirmations operation.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?TransactionReference $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
