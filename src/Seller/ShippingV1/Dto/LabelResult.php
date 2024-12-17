<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class LabelResult extends Dto
{
    /**
     * @param  ?string  $containerReferenceId  An identifier for the container. This must be unique within all the containers in the same shipment.
     * @param  ?string  $trackingId  The tracking identifier assigned to the container.
     * @param  ?Label  $label  The label details of the container.
     */
    public function __construct(
        public ?string $containerReferenceId = null,
        public ?string $trackingId = null,
        public ?Label $label = null,
    ) {}
}
