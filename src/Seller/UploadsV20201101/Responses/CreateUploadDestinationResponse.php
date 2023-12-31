<?php

namespace SellingPartnerApi\Seller\UploadsV20201101\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\UploadsV20201101\Dto\UploadDestination;

final class CreateUploadDestinationResponse extends BaseResponse
{
    /**
     * @param  UploadDestination  $payload Information about an upload destination.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly UploadDestination $payload,
        public readonly array $errors,
    ) {
    }
}
