<?php

namespace SellingPartnerApi\Seller\MessagingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\MessagingV1\Dto\Buyer;

final class GetAttributesResponse extends BaseResponse
{
    /**
     * @param  ?Buyer  $buyer The list of attributes related to the buyer.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Buyer $buyer = null,
        public readonly ?array $errors = null,
    ) {
    }
}
