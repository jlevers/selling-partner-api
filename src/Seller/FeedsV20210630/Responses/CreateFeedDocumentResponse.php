<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FeedsV20210630\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Traits\UploadsDocument;

final class CreateFeedDocumentResponse extends Response
{
    use UploadsDocument;

    /**
     * @param  string  $feedDocumentId  The identifier of the feed document.
     * @param  string  $url  The presigned URL for uploading the feed contents. This URL expires after 5 minutes.
     */
    public function __construct(
        public readonly string $feedDocumentId,
        public readonly string $url,
    ) {
    }
}