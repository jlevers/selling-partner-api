<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\Error;

final class PostContentDocumentSuspendSubmissionResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['warnings' => [Error::class]];

    /**
     * @param  Error[]|null  $warnings  A set of messages to the user, such as warnings or comments.
     */
    public function __construct(
        public readonly ?array $warnings = null,
    ) {
    }
}
