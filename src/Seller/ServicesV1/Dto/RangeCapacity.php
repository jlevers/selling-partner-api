<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RangeCapacity extends BaseDto
{
    protected static array $complexArrayTypes = ['slots' => [RangeSlot::class]];

    /**
     * @param  ?string  $capacityType  Type of capacity
     * @param  RangeSlot[]|null  $slots  Array of capacity slots in range slot format.
     */
    public function __construct(
        public readonly ?string $capacityType = null,
        public readonly ?array $slots = null,
    ) {
    }
}
