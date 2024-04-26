<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class RangeCapacity extends Dto
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
