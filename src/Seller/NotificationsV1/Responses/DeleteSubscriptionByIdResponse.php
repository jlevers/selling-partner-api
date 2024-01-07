<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class DeleteSubscriptionByIdResponse extends BaseResponse
{
    /**
     * @param  Error[]  $errorList A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $errorList = null,
    ) {
    }
}
