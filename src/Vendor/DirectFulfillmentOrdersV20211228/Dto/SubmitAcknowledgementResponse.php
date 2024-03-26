<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses\ErrorList;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses\TransactionId;

final class SubmitAcknowledgementResponse extends BaseDto
{
    /**
     * @param  ?TransactionId  $payload
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?TransactionId $payload = null,
        public readonly ?ErrorList $errors = null,
    ) {
    }
}
