<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto;

use SellingPartnerApi\Dto;

final class ShipmentLabels extends Dto
{
    protected static array $attributeMap = ['labelDownloadUrl' => 'labelDownloadURL'];

    /**
     * @param  string  $labelStatus  The status of your label.
     * @param  ?string  $labelDownloadUrl  URL to download generated labels.
     */
    public function __construct(
        public string $labelStatus,
        public ?string $labelDownloadUrl = null,
    ) {}
}
