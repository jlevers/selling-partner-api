<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DestinationResourceSpecification extends BaseDto
{
    /**
     * @param  ?SqsResource  $sqs The information required to create an Amazon Simple Queue Service (Amazon SQS) queue destination.
     * @param  ?EventBridgeResourceSpecification  $eventBridge The information required to create an Amazon EventBridge destination.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?SqsResource $sqs = null,
        public readonly ?EventBridgeResourceSpecification $eventBridge = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
