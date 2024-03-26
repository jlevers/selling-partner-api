<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentDocument extends BaseDto
{
    /**
     * @param  ?string  $uploadDestinationId  The identifier of the upload destination. Get this value by calling the `createServiceDocumentUploadDestination` operation of the Services API.
     * @param  ?string  $contentSha256  Sha256 hash of the file content. This value is used to determine if the file has been corrupted or tampered with during transit.
     */
    public function __construct(
        public readonly ?string $uploadDestinationId = null,
        public readonly ?string $contentSha256 = null,
    ) {
    }
}
