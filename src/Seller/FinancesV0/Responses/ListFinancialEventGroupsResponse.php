<?php

namespace SellingPartnerApi\Seller\FinancesV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FinancesV0\Dto\Error;
use SellingPartnerApi\Seller\FinancesV0\Dto\ListFinancialEventGroupsPayload;

final class ListFinancialEventGroupsResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?ListFinancialEventGroupsPayload  $payload  The payload for the listFinancialEventGroups operation.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ListFinancialEventGroupsPayload $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
