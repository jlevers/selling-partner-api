<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV1\Dto\ErrorList;
use SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV1\Dto\TransactionStatus;

final class GetTransactionResponse extends Response
{
    /**
     * @param  ?TransactionStatus  $payload  The payload for the getTransactionStatus operation.
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?TransactionStatus $payload = null,
        public readonly ?ErrorList $errors = null,
    ) {}
}
