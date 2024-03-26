<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RegulatedOrderVerificationStatus extends BaseDto
{
    protected static array $attributeMap = [
        'status' => 'Status',
        'requiresMerchantAction' => 'RequiresMerchantAction',
        'validRejectionReasons' => 'ValidRejectionReasons',
        'rejectionReason' => 'RejectionReason',
        'reviewDate' => 'ReviewDate',
        'externalReviewerId' => 'ExternalReviewerId',
    ];

    protected static array $complexArrayTypes = ['validRejectionReasons' => [RejectionReason::class]];

    /**
     * @param  string  $status  The verification status of the order.
     * @param  bool  $requiresMerchantAction  When true, the regulated information provided in the order requires a review by the merchant.
     * @param  RejectionReason[]  $validRejectionReasons  A list of valid rejection reasons that may be used to reject the order's regulated information.
     * @param  ?RejectionReason  $rejectionReason  The reason for rejecting the order's regulated information. Not present if the order isn't rejected.
     * @param  ?string  $reviewDate  The date the order was reviewed. In ISO 8601 date time format.
     * @param  ?string  $externalReviewerId  The identifier for the order's regulated information reviewer.
     */
    public function __construct(
        public readonly string $status,
        public readonly bool $requiresMerchantAction,
        public readonly array $validRejectionReasons,
        public readonly ?RejectionReason $rejectionReason = null,
        public readonly ?string $reviewDate = null,
        public readonly ?string $externalReviewerId = null,
    ) {
    }
}
