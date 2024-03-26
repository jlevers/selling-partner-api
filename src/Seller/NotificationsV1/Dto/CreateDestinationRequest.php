<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateDestinationRequest extends BaseDto
{
    /**
     * @param  DestinationResourceSpecification  $resourceSpecification  The information required to create a destination resource. Applications should use one resource type (sqs or eventBridge) per destination.
     * @param  string  $name  A developer-defined name to help identify this destination.
     */
    public function __construct(
        public readonly DestinationResourceSpecification $resourceSpecification,
        public readonly string $name,
    ) {
    }
}
