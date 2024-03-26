<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class EventBridgeResource extends BaseDto
{
    /**
     * @param  string  $name  The name of the partner event source associated with the destination.
     * @param  string  $region  The AWS region in which you receive the notifications. For AWS regions that are supported in Amazon EventBridge, see https://docs.aws.amazon.com/general/latest/gr/ev.html.
     * @param  string  $accountId  The identifier for the AWS account that is responsible for charges related to receiving notifications.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $region,
        public readonly string $accountId,
    ) {
    }
}
