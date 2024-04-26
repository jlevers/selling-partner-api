<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\OrdersV0\Dto\Error;
use SellingPartnerApi\Seller\OrdersV0\Dto\Order;

final class GetOrderResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?Order  $payload  Order information.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Order $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
