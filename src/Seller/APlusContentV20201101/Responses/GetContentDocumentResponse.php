<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\ContentRecord;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\Error;

final class GetContentDocumentResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['warnings' => [Error::class]];

    /**
     * @param  ContentRecord  $contentRecord  A content document with additional information for content management.
     * @param  Error[]|null  $warnings  A set of messages to the user, such as warnings or comments.
     */
    public function __construct(
        public readonly ContentRecord $contentRecord,
        public readonly ?array $warnings = null,
    ) {
    }
}
