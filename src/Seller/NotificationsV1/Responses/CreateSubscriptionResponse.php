<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\NotificationsV1\Dto\Subscription;

final class CreateSubscriptionResponse extends BaseResponse
{
    /**
     * @param  ?Subscription  $subscription Represents a subscription to receive notifications.
     * @param  Error[]  $errorList A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Subscription $subscription = null,
        public readonly ?array $errorList = null,
    ) {
    }
}
