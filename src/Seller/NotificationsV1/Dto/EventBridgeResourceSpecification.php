<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class EventBridgeResourceSpecification extends BaseDto
{
    /**
     * @param  string  $region  The AWS region in which you will be receiving the notifications.
     * @param  string  $accountId  The identifier for the AWS account that is responsible for charges related to receiving notifications.
     */
    public function __construct(
        public readonly string $region,
        public readonly string $accountId,
    ) {
    }
}
