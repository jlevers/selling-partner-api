<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ServiceUploadDocument extends BaseDto
{
    /**
     * @param  string  $contentType The content type of the to-be-uploaded file
     * @param  float  $contentLength The content length of the to-be-uploaded file
     * @param  ?string  $contentMd5 An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $contentType,
        public readonly float $contentLength,
        public readonly ?string $contentMd5 = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
