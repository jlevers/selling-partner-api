<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeesEstimateResult extends BaseDto
{
    protected static array $attributeMap = [
        'status' => 'Status',
        'feesEstimateIdentifier' => 'FeesEstimateIdentifier',
        'feesEstimate' => 'FeesEstimate',
        'error' => 'Error',
    ];

    /**
     * @param  ?string  $status  The status of the fee request. Possible values: Success, ClientError, ServiceError.
     * @param  ?FeesEstimateIdentifier  $feesEstimateIdentifier  An item identifier, marketplace, time of request, and other details that identify an estimate.
     * @param  ?FeesEstimate  $feesEstimate  The total estimated fees for an item and a list of details.
     * @param  ?FeesEstimateError  $error  An unexpected error occurred during this operation.
     */
    public function __construct(
        public readonly ?string $status = null,
        public readonly ?FeesEstimateIdentifier $feesEstimateIdentifier = null,
        public readonly ?FeesEstimate $feesEstimate = null,
        public readonly ?FeesEstimateError $error = null,
    ) {
    }
}
