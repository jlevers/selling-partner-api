<?php

namespace SellingPartnerApi\Seller\DataKioskV20231115\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;
use SellingPartnerApi\Seller\DataKioskV20231115\Responses\Query;

final class CreateQuerySpecification extends BaseDto
{
    /**
     * @param  Query  $query Detailed information about the query.
     * @param  ?string  $paginationToken A token to fetch a certain page of query results when there are multiple pages of query results available. The value of this token must be fetched from the `pagination.nextToken` field of the `Query` object, and the `query` field for this object must also be set to the `query` field of the same `Query` object. A `Query` object can be retrieved from either the `getQueries` or `getQuery` operation. In the absence of this token value, the first page of query results will be requested.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly Query $query,
        public readonly ?string $paginationToken = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
