<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\ShipmentsV1\Dto\ErrorList;
use SellingPartnerApi\Vendor\ShipmentsV1\Dto\TransactionReference;

final class SubmitShipmentConfirmationsResponse extends Response
{
    /**
     * @param  ?TransactionReference  $payload  The response payload for the SubmitShipmentConfirmations operation.
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?TransactionReference $payload = null,
        public readonly ?ErrorList $errors = null,
    ) {}
}
