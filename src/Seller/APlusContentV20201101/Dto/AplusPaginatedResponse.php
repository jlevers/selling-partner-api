<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AplusPaginatedResponse extends BaseDto
{
    protected static array $complexArrayTypes = ['warnings' => [Error::class]];

    /**
     * @param  Error[]|null  $warnings  A set of messages to the user, such as warnings or comments.
     * @param  ?string  $nextPageToken  A page token that is returned when the results of the call exceed the page size. To get another page of results, call the operation again, passing in this value with the pageToken parameter.
     */
    public function __construct(
        public readonly ?array $warnings = null,
        public readonly ?string $nextPageToken = null,
    ) {
    }
}
