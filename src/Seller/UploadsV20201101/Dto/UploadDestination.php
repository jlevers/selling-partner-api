<?php

namespace SellingPartnerApi\Seller\UploadsV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UploadDestination extends BaseDto
{
    /**
     * @param  ?string  $uploadDestinationId  The unique identifier for the upload destination.
     * @param  ?string  $url  The URL for the upload destination.
     * @param  ?mixed[]  $headers  The headers to include in the upload request.
     */
    public function __construct(
        public readonly ?string $uploadDestinationId = null,
        public readonly ?string $url = null,
        public readonly ?array $headers = null,
    ) {
    }
}
