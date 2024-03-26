<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\Error;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\PublishRecord;

final class SearchContentPublishRecordsResponse extends BaseResponse
{
    protected static array $complexArrayTypes = [
        'publishRecordList' => [PublishRecord::class],
        'warnings' => [Error::class],
    ];

    /**
     * @param  PublishRecord[]  $publishRecordList  A list of A+ Content publishing records.
     * @param  Error[]|null  $warnings  A set of messages to the user, such as warnings or comments.
     * @param  ?string  $nextPageToken  A page token that is returned when the results of the call exceed the page size. To get another page of results, call the operation again, passing in this value with the pageToken parameter.
     */
    public function __construct(
        public readonly array $publishRecordList,
        public readonly ?array $warnings = null,
        public readonly ?string $nextPageToken = null,
    ) {
    }
}
