<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\Error;

final class PostContentDocumentResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['warnings' => [Error::class]];

    /**
     * @param  string  $contentReferenceKey  A unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier.
     * @param  Error[]|null  $warnings  A set of messages to the user, such as warnings or comments.
     */
    public function __construct(
        public readonly string $contentReferenceKey,
        public readonly ?array $warnings = null,
    ) {
    }
}
