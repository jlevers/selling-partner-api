<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use SellingPartnerApi\Dto;

final class CreateContainerLabelRequest extends Dto
{
    protected static array $complexArrayTypes = ['packages' => Package::class];

    /**
     * @param  PartyIdentification  $sellingParty  The name, address, and tax details of a party.
     * @param  PartyIdentification  $shipFromParty  The name, address, and tax details of a party.
     * @param  string  $carrierId  The unique carrier code for the carrier for whom container labels are requested.
     * @param  string  $vendorContainerId  The unique, vendor-provided identifier for the container.
     * @param  Package[]  $packages  An array of package objects in a container.
     */
    public function __construct(
        public PartyIdentification $sellingParty,
        public PartyIdentification $shipFromParty,
        public string $carrierId,
        public string $vendorContainerId,
        public array $packages,
    ) {}
}
