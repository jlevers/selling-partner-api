<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\NotificationsV1\Dto\Destination;

final class GetDestinationResponse extends BaseResponse
{
    /**
     * @param  ?Destination  $destination Represents a destination created when you call the createDestination operation.
     * @param  Error[]  $errorList A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Destination $destination = null,
        public readonly ?array $errorList = null,
    ) {
    }
}
