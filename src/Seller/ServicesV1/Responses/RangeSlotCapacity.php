<?php

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class RangeSlotCapacity extends BaseResponse
{
    /**
     * @param  ?string  $resourceId Resource Identifier.
     * @param  RangeCapacity[]  $capacities Array of range capacities where each entry is for a specific capacity type.
     * @param  ?string  $nextPageToken Next page token, if there are more pages.
     */
    public function __construct(
        public readonly ?string $resourceId = null,
        public readonly ?array $capacities = null,
        public readonly ?string $nextPageToken = null,
    ) {
    }
}
