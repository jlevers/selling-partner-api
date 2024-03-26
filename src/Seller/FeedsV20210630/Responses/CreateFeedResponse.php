<?php

namespace SellingPartnerApi\Seller\FeedsV20210630\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class CreateFeedResponse extends BaseResponse
{
    /**
     * @param  string  $feedId  The identifier for the feed. This identifier is unique only in combination with a seller ID.
     */
    public function __construct(
        public readonly string $feedId,
    ) {
    }
}
