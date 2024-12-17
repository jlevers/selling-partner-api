<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\OrdersV1\Dto\ErrorList;
use SellingPartnerApi\Vendor\OrdersV1\Dto\TransactionId;

final class SubmitAcknowledgementResponse extends Response
{
    /**
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?TransactionId $payload = null,
        public readonly ?ErrorList $errors = null,
    ) {}
}
