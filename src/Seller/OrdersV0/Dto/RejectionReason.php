<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RejectionReason extends BaseDto
{
    protected static array $attributeMap = [
        'rejectionReasonId' => 'RejectionReasonId',
        'rejectionReasonDescription' => 'RejectionReasonDescription',
    ];

    /**
     * @param  string  $rejectionReasonId  The unique identifier for the rejection reason.
     * @param  string  $rejectionReasonDescription  The description of this rejection reason.
     */
    public function __construct(
        public readonly string $rejectionReasonId,
        public readonly string $rejectionReasonDescription,
    ) {
    }
}
