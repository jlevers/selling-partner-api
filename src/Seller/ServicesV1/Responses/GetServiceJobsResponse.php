<?php

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ServicesV1\Dto\JobListing;

final class GetServiceJobsResponse extends BaseResponse
{
    /**
     * @param  ?JobListing  $jobListing The payload for the `getServiceJobs` operation.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?JobListing $jobListing = null,
        public readonly ?array $errors = null,
    ) {
    }
}
