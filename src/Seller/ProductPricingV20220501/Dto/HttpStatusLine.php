<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class HttpStatusLine extends Dto
{
    /**
     * @param  ?int  $statusCode  The HTTP response status code.
     * @param  ?string  $reasonPhrase  The HTTP response reason phrase.
     */
    public function __construct(
        public ?int $statusCode = null,
        public ?string $reasonPhrase = null,
    ) {}
}
