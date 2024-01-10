<?php

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ServicesV1\Dto\ServiceDocumentUploadDestination;

final class CreateServiceDocumentUploadDestination extends BaseResponse
{
    /**
     * @param  ?ServiceDocumentUploadDestination  $serviceDocumentUploadDestination Information about an upload destination.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ServiceDocumentUploadDestination $serviceDocumentUploadDestination = null,
        public readonly ?array $errors = null,
    ) {
    }
}
