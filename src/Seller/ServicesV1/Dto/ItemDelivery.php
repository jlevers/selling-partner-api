<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class ItemDelivery extends Dto
{
    /**
     * @param  ?\DateTimeInterface  $estimatedDeliveryDate  The date and time of the latest Estimated Delivery Date (EDD) of all the items with an EDD. In ISO 8601 format.
     * @param  ?ItemDeliveryPromise  $itemDeliveryPromise  Promised delivery information for the item.
     */
    public function __construct(
        public ?\DateTimeInterface $estimatedDeliveryDate = null,
        public ?ItemDeliveryPromise $itemDeliveryPromise = null,
    ) {}
}
