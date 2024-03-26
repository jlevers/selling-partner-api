<?php

namespace SellingPartnerApi\Seller\UploadsV20201101\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\UploadsV20201101\Dto\Error;
use SellingPartnerApi\Seller\UploadsV20201101\Dto\UploadDestination;

final class CreateUploadDestinationResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?UploadDestination  $payload  Information about an upload destination.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?UploadDestination $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
