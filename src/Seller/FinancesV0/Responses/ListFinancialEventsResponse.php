<?php

namespace SellingPartnerApi\Seller\FinancesV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FinancesV0\Dto\Error;
use SellingPartnerApi\Seller\FinancesV0\Dto\ListFinancialEventsPayload;

final class ListFinancialEventsResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?ListFinancialEventsPayload  $payload  The payload for the listFinancialEvents operation.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ListFinancialEventsPayload $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
