<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\ContentRecord;

final class GetContentDocumentResponse extends BaseResponse
{
    /**
     * @param  ContentRecord  $contentRecord A content document with additional information for content management.
     * @param  Error[]  $messageSet A set of messages to the user, such as warnings or comments.
     */
    public function __construct(
        public readonly ContentRecord $contentRecord,
        public readonly ?array $messageSet = null,
    ) {
    }
}
