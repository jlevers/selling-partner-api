<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Dto\Issue;

final class ListingsItemSubmissionResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['issues' => [Issue::class]];

    /**
     * @param  string  $sku  A selling partner provided identifier for an Amazon listing.
     * @param  string  $status  The status of the listings item submission.
     * @param  string  $submissionId  The unique identifier of the listings item submission.
     * @param  Issue[]|null  $issues  Listings item issues related to the listings item submission.
     */
    public function __construct(
        public readonly string $sku,
        public readonly string $status,
        public readonly string $submissionId,
        public readonly ?array $issues = null,
    ) {
    }
}
