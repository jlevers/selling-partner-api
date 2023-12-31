<?php

namespace SellingPartnerApi\Seller\FeedsV20210630\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class CreateFeedDocumentResponse extends BaseResponse
{
    /**
     * @param  string  $feedDocumentId The identifier of the feed document.
     * @param  string  $url The presigned URL for uploading the feed contents. This URL expires after 5 minutes.
     */
    public function __construct(
        public readonly string $feedDocumentId,
        public readonly string $url,
    ) {
    }
}
