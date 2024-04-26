<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\OrdersV1\Dto\Error;
use SellingPartnerApi\Vendor\OrdersV1\Dto\TransactionId;

final class SubmitAcknowledgementResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?TransactionId  $payload
     * @param  Error[]  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?TransactionId $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
