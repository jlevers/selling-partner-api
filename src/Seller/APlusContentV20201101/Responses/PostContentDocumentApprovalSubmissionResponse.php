<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\Error;

final class PostContentDocumentApprovalSubmissionResponse extends Response
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
