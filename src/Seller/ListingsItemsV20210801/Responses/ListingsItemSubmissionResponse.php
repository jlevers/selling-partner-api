<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class ListingsItemSubmissionResponse extends BaseResponse
{
    /**
     * @param  string  $sku A selling partner provided identifier for an Amazon listing.
     * @param  string  $status The status of the listings item submission.
     * @param  string  $submissionId The unique identifier of the listings item submission.
     * @param  Issue[]  $issues Listings item issues related to the listings item submission.
     */
    public function __construct(
        public readonly string $sku,
        public readonly string $status,
        public readonly string $submissionId,
        public readonly ?array $issues = null,
    ) {
    }
}
