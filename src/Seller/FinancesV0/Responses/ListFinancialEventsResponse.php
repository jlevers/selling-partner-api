<?php

namespace SellingPartnerApi\Seller\FinancesV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FinancesV0\Dto\ListFinancialEventsPayload;

final class ListFinancialEventsResponse extends BaseResponse
{
    /**
     * @param  ?ListFinancialEventsPayload  $listFinancialEventsPayload The payload for the listFinancialEvents operation.
     * @param  Error[]  $error A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ListFinancialEventsPayload $listFinancialEventsPayload = null,
        public readonly ?array $error = null,
    ) {
    }
}
