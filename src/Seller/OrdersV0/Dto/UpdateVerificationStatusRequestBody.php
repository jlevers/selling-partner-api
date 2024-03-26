<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdateVerificationStatusRequestBody extends BaseDto
{
    /**
     * @param  string  $status  The verification status of the order.
     * @param  string  $externalReviewerId  The identifier for the order's regulated information reviewer.
     * @param  ?string  $rejectionReasonId  The unique identifier for the rejection reason used for rejecting the order's regulated information. Only required if the new status is rejected.
     */
    public function __construct(
        public readonly string $status,
        public readonly string $externalReviewerId,
        public readonly ?string $rejectionReasonId = null,
    ) {
    }
}
