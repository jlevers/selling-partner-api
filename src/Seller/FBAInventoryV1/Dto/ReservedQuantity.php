<?php

namespace SellingPartnerApi\Seller\FBAInventoryV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ReservedQuantity extends BaseDto
{
    /**
     * @param  ?int  $totalReservedQuantity  The total number of units in Amazon's fulfillment network that are currently being picked, packed, and shipped; or are sidelined for measurement, sampling, or other internal processes.
     * @param  ?int  $pendingCustomerOrderQuantity  The number of units reserved for customer orders.
     * @param  ?int  $pendingTransshipmentQuantity  The number of units being transferred from one fulfillment center to another.
     * @param  ?int  $fcProcessingQuantity  The number of units that have been sidelined at the fulfillment center for additional processing.
     */
    public function __construct(
        public readonly ?int $totalReservedQuantity = null,
        public readonly ?int $pendingCustomerOrderQuantity = null,
        public readonly ?int $pendingTransshipmentQuantity = null,
        public readonly ?int $fcProcessingQuantity = null,
    ) {
    }
}
