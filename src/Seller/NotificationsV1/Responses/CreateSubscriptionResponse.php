<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\NotificationsV1\Dto\Error;
use SellingPartnerApi\Seller\NotificationsV1\Dto\Subscription;

final class CreateSubscriptionResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?Subscription  $payload  Represents a subscription to receive notifications.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Subscription $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
