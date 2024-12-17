<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ServicesV1\Dto\ErrorList;
use SellingPartnerApi\Seller\ServicesV1\Dto\ServiceJob;

final class GetServiceJobByServiceJobIdResponse extends Response
{
    /**
     * @param  ?ServiceJob  $payload  The job details of a service.
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ServiceJob $payload = null,
        public readonly ?ErrorList $errors = null,
    ) {}
}
