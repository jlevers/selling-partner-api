<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DestinationResource extends BaseDto
{
    /**
     * @param  ?SqsResource  $sqs  The information required to create an Amazon Simple Queue Service (Amazon SQS) queue destination.
     * @param  ?EventBridgeResource  $eventBridge  Represents an Amazon EventBridge destination.
     */
    public function __construct(
        public readonly ?SqsResource $sqs = null,
        public readonly ?EventBridgeResource $eventBridge = null,
    ) {
    }
}
