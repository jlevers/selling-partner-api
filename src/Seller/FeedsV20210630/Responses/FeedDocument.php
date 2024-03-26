<?php

namespace SellingPartnerApi\Seller\FeedsV20210630\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Traits\DownloadsDocument;

final class FeedDocument extends BaseResponse
{
    use DownloadsDocument;

    /**
     * @param  string  $feedDocumentId  The identifier for the feed document. This identifier is unique only in combination with a seller ID.
     * @param  string  $url  A presigned URL for the feed document. If `compressionAlgorithm` is not returned, you can download the feed directly from this URL. This URL expires after 5 minutes.
     * @param  ?string  $compressionAlgorithm  If the feed document contents have been compressed, the compression algorithm used is returned in this property and you must decompress the feed when you download. Otherwise, you can download the feed directly. Refer to [Step 7. Download the feed processing report](doc:feeds-api-v2021-06-30-use-case-guide#step-7-download-the-feed-processing-report) in the use case guide, where sample code is provided.
     */
    public function __construct(
        public readonly string $feedDocumentId,
        public readonly string $url,
        public readonly ?string $compressionAlgorithm = null,
    ) {
    }
}
