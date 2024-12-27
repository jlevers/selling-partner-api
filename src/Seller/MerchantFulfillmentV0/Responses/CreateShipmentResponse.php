<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto\ErrorList;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto\Shipment;

final class CreateShipmentResponse extends Response
{
    /**
     * @param  ?Shipment  $payload  The details of a shipment. Includes the shipment status.
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Shipment $payload = null,
        public readonly ?ErrorList $errors = null,
    ) {}
}
