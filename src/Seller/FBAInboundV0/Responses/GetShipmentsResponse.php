<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\Error;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\GetShipmentsResult;

final class GetShipmentsResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?GetShipmentsResult  $payload
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?GetShipmentsResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
