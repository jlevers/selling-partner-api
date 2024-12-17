<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\InvoicesV20240619\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\InvoicesV20240619\Dto\Export;

final class GetInvoicesExportResponse extends Response
{
    /**
     * @param  ?Export  $export  Detailed information about the export.
     */
    public function __construct(
        public readonly ?Export $export = null,
    ) {}
}
