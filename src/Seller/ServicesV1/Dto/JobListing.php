<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class JobListing extends BaseDto
{
    protected static array $complexArrayTypes = ['jobs' => [ServiceJob::class]];

    /**
     * @param  ?int  $totalResultSize  Total result size of the query result.
     * @param  ?string  $nextPageToken  A generated string used to pass information to your next request. If `nextPageToken` is returned, pass the value of `nextPageToken` to the `pageToken` to get next results.
     * @param  ?string  $previousPageToken  A generated string used to pass information to your next request. If `previousPageToken` is returned, pass the value of `previousPageToken` to the `pageToken` to get previous page results.
     * @param  ServiceJob[]|null  $jobs  List of job details for the given input.
     */
    public function __construct(
        public readonly ?int $totalResultSize = null,
        public readonly ?string $nextPageToken = null,
        public readonly ?string $previousPageToken = null,
        public readonly ?array $jobs = null,
    ) {
    }
}
