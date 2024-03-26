<?php

namespace SellingPartnerApi\Seller\DataKioskV20231115\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class GetDocumentResponse extends BaseResponse
{
    /**
     * @param  string  $documentId  The identifier for the Data Kiosk document. This identifier is unique only in combination with a selling partner account ID.
     * @param  string  $documentUrl  A presigned URL that can be used to retrieve the Data Kiosk document. This URL expires after 5 minutes. If the Data Kiosk document is compressed, the `Content-Encoding` header will indicate the compression algorithm.
     *
     * **Note:** Most HTTP clients are capable of automatically decompressing downloaded files based on the `Content-Encoding` header.
     */
    public function __construct(
        public readonly string $documentId,
        public readonly string $documentUrl,
    ) {
    }
}
