<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class VendorDetails extends Dto
{
    /**
     * @param  ?PartyIdentification  $sellingParty
     * @param  ?DateTime  $vendorShipmentId  Unique vendor shipment id which is not used in last 365 days
     */
    public function __construct(
        public readonly ?PartyIdentification $sellingParty = null,
        public readonly ?\DateTime $vendorShipmentId = null,
    ) {
    }
}
