<?php

namespace SellingPartnerApi\Seller\FBAInventoryV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UnfulfillableQuantity extends BaseDto
{
    /**
     * @param  ?int  $totalUnfulfillableQuantity  The total number of units in Amazon's fulfillment network in unsellable condition.
     * @param  ?int  $customerDamagedQuantity  The number of units in customer damaged disposition.
     * @param  ?int  $warehouseDamagedQuantity  The number of units in warehouse damaged disposition.
     * @param  ?int  $distributorDamagedQuantity  The number of units in distributor damaged disposition.
     * @param  ?int  $carrierDamagedQuantity  The number of units in carrier damaged disposition.
     * @param  ?int  $defectiveQuantity  The number of units in defective disposition.
     * @param  ?int  $expiredQuantity  The number of units in expired disposition.
     */
    public function __construct(
        public readonly ?int $totalUnfulfillableQuantity = null,
        public readonly ?int $customerDamagedQuantity = null,
        public readonly ?int $warehouseDamagedQuantity = null,
        public readonly ?int $distributorDamagedQuantity = null,
        public readonly ?int $carrierDamagedQuantity = null,
        public readonly ?int $defectiveQuantity = null,
        public readonly ?int $expiredQuantity = null,
    ) {
    }
}
