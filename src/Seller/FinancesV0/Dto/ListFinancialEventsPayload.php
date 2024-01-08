<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ListFinancialEventsPayload extends BaseDto
{
    /**
     * @param  ?string  $nextToken When present and not empty, pass this string token in the next request to return the next response page.
     * @param  ?FinancialEvents  $financialEvents Contains all information related to a financial event.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $nextToken = null,
        public readonly ?FinancialEvents $financialEvents = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
