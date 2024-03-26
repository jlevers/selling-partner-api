<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ServiceDocumentUploadDestination extends BaseDto
{
    /**
     * @param  string  $uploadDestinationId  The unique identifier to be used by APIs that reference the upload destination.
     * @param  string  $url  The URL to which to upload the file.
     * @param  EncryptionDetails  $encryptionDetails  Encryption details for required client-side encryption and decryption of document contents.
     * @param  ?mixed[]  $headers  The headers to include in the upload request.
     */
    public function __construct(
        public readonly string $uploadDestinationId,
        public readonly string $url,
        public readonly EncryptionDetails $encryptionDetails,
        public readonly ?array $headers = null,
    ) {
    }
}
