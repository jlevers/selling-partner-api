<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\CreateInboundShipmentPlanResult;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\Error;

final class CreateInboundShipmentPlanResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?CreateInboundShipmentPlanResult  $payload
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?CreateInboundShipmentPlanResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
