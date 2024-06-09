<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\OrdersV1\Dto\Error;
use SellingPartnerApi\Vendor\OrdersV1\Dto\OrderList;

final class GetPurchaseOrdersResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?OrderList  $payload
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?OrderList $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
