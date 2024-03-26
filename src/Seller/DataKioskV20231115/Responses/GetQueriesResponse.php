<?php

namespace SellingPartnerApi\Seller\DataKioskV20231115\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\DataKioskV20231115\Dto\Pagination;

final class GetQueriesResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['queries' => [Query::class]];

    /**
     * @param  Query[]  $queries  A list of queries.
     * @param  ?Pagination  $pagination  When a query produces results that are not included in the data document, pagination occurs. This means the results are divided into pages. To retrieve the next page, you must pass a `CreateQuerySpecification` object with `paginationToken` set to this object's `nextToken` and with `query` set to this object's `query` in the subsequent `createQuery` request. When there are no more pages to fetch, the `nextToken` field will be absent.
     */
    public function __construct(
        public readonly array $queries,
        public readonly ?Pagination $pagination = null,
    ) {
    }
}
