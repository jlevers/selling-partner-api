<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\GetShipmentItemsResult;

final class GetShipmentItemsResponse extends Response
{
    /**
     * @param  ?GetShipmentItemsResult  $payload  Result for the get shipment items operation
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?GetShipmentItemsResult $payload = null,
        public readonly ?ErrorList $errors = null,
    ) {}
}
