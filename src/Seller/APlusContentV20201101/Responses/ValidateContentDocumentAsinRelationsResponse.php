<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\Error;

final class ValidateContentDocumentAsinRelationsResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['warnings' => [Error::class], 'errors' => [Error::class]];

    /**
     * @param  Error[]  $warnings A set of messages to the user, such as warnings or comments.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $warnings = null,
        public readonly ?array $errors = null,
    ) {
    }
}
