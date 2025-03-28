<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class RequestedLabelCustomization extends Dto
{
    /**
     * @param  ?string[]  $requestAttributes  Specify the type of attributes to be added on a label.
     */
    public function __construct(
        public ?array $requestAttributes = null,
    ) {}
}
