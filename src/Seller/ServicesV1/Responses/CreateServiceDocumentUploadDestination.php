<?php

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ServicesV1\Dto\Error;
use SellingPartnerApi\Seller\ServicesV1\Dto\ServiceDocumentUploadDestination;

final class CreateServiceDocumentUploadDestination extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?ServiceDocumentUploadDestination  $payload  Information about an upload destination.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ServiceDocumentUploadDestination $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
