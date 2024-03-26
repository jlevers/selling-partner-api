<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\ContentMetadataRecord;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\Error;

final class SearchContentDocumentsResponse extends BaseResponse
{
    protected static array $complexArrayTypes = [
        'contentMetadataRecords' => [ContentMetadataRecord::class],
        'warnings' => [Error::class],
    ];

    /**
     * @param  ContentMetadataRecord[]  $contentMetadataRecords  A list of A+ Content metadata records.
     * @param  Error[]|null  $warnings  A set of messages to the user, such as warnings or comments.
     * @param  ?string  $nextPageToken  A page token that is returned when the results of the call exceed the page size. To get another page of results, call the operation again, passing in this value with the pageToken parameter.
     */
    public function __construct(
        public readonly array $contentMetadataRecords,
        public readonly ?array $warnings = null,
        public readonly ?string $nextPageToken = null,
    ) {
    }
}
