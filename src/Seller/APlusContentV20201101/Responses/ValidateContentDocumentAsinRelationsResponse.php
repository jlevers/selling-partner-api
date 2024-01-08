<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class ValidateContentDocumentAsinRelationsResponse extends BaseResponse
{
    /**
     * @param  Error[]  $messageSet A set of messages to the user, such as warnings or comments.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $messageSet = null,
        public readonly ?array $errors = null,
    ) {
    }
}
