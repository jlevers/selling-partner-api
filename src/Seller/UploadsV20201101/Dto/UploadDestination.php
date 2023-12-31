<?php

namespace SellingPartnerApi\Seller\UploadsV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UploadDestination extends BaseDto
{
    /**
     * @param  string  $uploadDestinationId The unique identifier for the upload destination.
     * @param  string  $url The URL for the upload destination.
     * @param  array  $headers The headers to include in the upload request.
     */
    public function __construct(
        public readonly string $uploadDestinationId,
        public readonly string $url,
        public readonly array $headers,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
