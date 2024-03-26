<?php

namespace SellingPartnerApi\Seller\DataKioskV20231115\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class CreateQueryResponse extends BaseResponse
{
    /**
     * @param  string  $queryId  The identifier for the query. This identifier is unique only in combination with a selling partner account ID.
     */
    public function __construct(
        public readonly string $queryId,
    ) {
    }
}
