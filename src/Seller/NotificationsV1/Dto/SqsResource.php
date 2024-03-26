<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SqsResource extends BaseDto
{
    /**
     * @param  string  $arn  The Amazon Resource Name (ARN) associated with the SQS queue.
     */
    public function __construct(
        public readonly string $arn,
    ) {
    }
}
