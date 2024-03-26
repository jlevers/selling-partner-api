<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\NotificationsV1\Dto\Destination;
use SellingPartnerApi\Seller\NotificationsV1\Dto\Error;

final class CreateDestinationResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?Destination  $payload  Represents a destination created when you call the createDestination operation.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Destination $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
