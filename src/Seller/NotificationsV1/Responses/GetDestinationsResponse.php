<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\NotificationsV1\Dto\Destination;
use SellingPartnerApi\Seller\NotificationsV1\Dto\Error;

final class GetDestinationsResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['payload' => [Destination::class], 'errors' => [Error::class]];

    /**
     * @param  Destination[]|null  $payload  A list of destinations.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
