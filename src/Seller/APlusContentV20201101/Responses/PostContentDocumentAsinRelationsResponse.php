<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class PostContentDocumentAsinRelationsResponse extends BaseResponse
{
    /**
     * @param  Error[]  $messageSet A set of messages to the user, such as warnings or comments.
     */
    public function __construct(
        public readonly ?array $messageSet = null,
    ) {
    }
}
