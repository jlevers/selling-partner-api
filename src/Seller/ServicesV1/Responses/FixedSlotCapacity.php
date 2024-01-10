<?php

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class FixedSlotCapacity extends BaseResponse
{
    /**
     * @param  ?string  $resourceId Resource Identifier.
     * @param  ?float  $slotDuration The duration of each slot which is returned. This value will be a multiple of 5 and fall in the following range: 5 <= `slotDuration` <= 360.
     * @param  RangeCapacity[]  $capacities Array of range capacities where each entry is for a specific capacity type.
     * @param  ?string  $nextPageToken Next page token, if there are more pages.
     */
    public function __construct(
        public readonly ?string $resourceId = null,
        public readonly ?float $slotDuration = null,
        public readonly ?array $capacities = null,
        public readonly ?string $nextPageToken = null,
    ) {
    }
}
