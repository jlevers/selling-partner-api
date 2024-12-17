<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ShippingV1\Dto\ErrorList;
use SellingPartnerApi\Seller\ShippingV1\Dto\RetrieveShippingLabelResult;

final class RetrieveShippingLabelResponse extends Response
{
    /**
     * @param  ?RetrieveShippingLabelResult  $payload  The payload schema for the retrieveShippingLabel operation.
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?RetrieveShippingLabelResult $payload = null,
        public readonly ?ErrorList $errors = null,
    ) {}
}
