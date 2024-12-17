<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class CustomPlacementInput extends Dto
{
    protected static array $complexArrayTypes = ['items' => ItemInput::class];

    /**
     * @param  ItemInput[]  $items  Items included while creating Inbound Plan.
     * @param  string  $warehouseId  Warehouse Id.
     */
    public function __construct(
        public array $items,
        public string $warehouseId,
    ) {}
}
