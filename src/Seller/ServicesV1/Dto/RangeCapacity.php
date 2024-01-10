<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RangeCapacity extends BaseDto
{
    protected static array $complexArrayTypes = ['slots' => [RangeSlot::class]];

    /**
     * @param  ?string  $capacityType Type of capacity
     * @param  RangeSlot[]  $slots Array of capacity slots in range slot format.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $capacityType = null,
        public readonly ?array $slots = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
