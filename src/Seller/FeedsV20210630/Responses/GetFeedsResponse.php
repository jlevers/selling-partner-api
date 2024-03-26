<?php

namespace SellingPartnerApi\Seller\FeedsV20210630\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class GetFeedsResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['feeds' => [Feed::class]];

    /**
     * @param  Feed[]  $feeds  A list of feeds.
     * @param  ?string  $nextToken  Returned when the number of results exceeds pageSize. To get the next page of results, call the getFeeds operation with this token as the only parameter.
     */
    public function __construct(
        public readonly array $feeds,
        public readonly ?string $nextToken = null,
    ) {
    }
}
