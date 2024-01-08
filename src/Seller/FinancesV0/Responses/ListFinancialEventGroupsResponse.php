<?php

namespace SellingPartnerApi\Seller\FinancesV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FinancesV0\Dto\ListFinancialEventGroupsPayload;

final class ListFinancialEventGroupsResponse extends BaseResponse
{
    /**
     * @param  ?ListFinancialEventGroupsPayload  $listFinancialEventGroupsPayload The payload for the listFinancialEventGroups operation.
     * @param  Error[]  $error A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ListFinancialEventGroupsPayload $listFinancialEventGroupsPayload = null,
        public readonly ?array $error = null,
    ) {
    }
}
