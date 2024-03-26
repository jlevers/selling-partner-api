<?php

namespace SellingPartnerApi\Seller\FBAInventoryV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Pagination extends BaseDto
{
    /**
     * @param  ?string  $nextToken  A generated string used to retrieve the next page of the result. If nextToken is returned, pass the value of nextToken to the next request. If nextToken is not returned, there are no more items to return.
     */
    public function __construct(
        public readonly ?string $nextToken = null,
    ) {
    }
}
