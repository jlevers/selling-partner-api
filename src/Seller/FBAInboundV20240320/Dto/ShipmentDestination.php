<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class ShipmentDestination extends Dto
{
    /**
     * @param  string  $destinationType  The type of destination for this shipment. Can be `AMAZON_OPTIMIZED`, or `AMAZON_WAREHOUSE`.
     * @param  ?Address  $address  Specific details to identify a place.
     * @param  ?string  $warehouseId  The warehouse that the shipment should be sent to.  Empty if the destination type is `AMAZON_OPTIMIZED`.
     */
    public function __construct(
        public readonly string $destinationType,
        public readonly ?Address $address = null,
        public readonly ?string $warehouseId = null,
    ) {
    }
}
