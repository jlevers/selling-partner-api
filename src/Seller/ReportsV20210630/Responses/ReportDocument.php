<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Traits\DownloadsDocument;

final class ReportDocument extends BaseResponse
{
    use DownloadsDocument;

    /**
     * @param  string  $reportDocumentId  The identifier for the report document. This identifier is unique only in combination with a seller ID.
     * @param  string  $url  A presigned URL for the report document. If `compressionAlgorithm` is not returned, you can download the report directly from this URL. This URL expires after 5 minutes.
     * @param  ?string  $compressionAlgorithm  If the report document contents have been compressed, the compression algorithm used is returned in this property and you must decompress the report when you download. Otherwise, you can download the report directly. Refer to [Step 2. Download the report](doc:reports-api-v2021-06-30-retrieve-a-report#step-2-download-the-report) in the use case guide, where sample code is provided.
     */
    public function __construct(
        public readonly string $reportDocumentId,
        public readonly string $url,
        public readonly ?string $compressionAlgorithm = null,
    ) {
    }
}
