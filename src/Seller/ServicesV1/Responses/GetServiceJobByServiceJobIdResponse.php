<?php

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ServicesV1\Dto\ServiceJob;

final class GetServiceJobByServiceJobIdResponse extends BaseResponse
{
    /**
     * @param  ?ServiceJob  $serviceJob The job details of a service.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ServiceJob $serviceJob = null,
        public readonly ?array $errors = null,
    ) {
    }
}
