<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\TransfersV20240601\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\TransfersV20240601\Dto\PiDetails;

final class GetPaymentMethodsResponse extends Response
{
    protected static array $complexArrayTypes = ['piDetails' => PiDetails::class];

    /**
     * @param  PiDetails[]|null  $piDetails  The list of payment instruments.
     */
    public function __construct(
        public readonly ?array $piDetails = null,
    ) {}
}
