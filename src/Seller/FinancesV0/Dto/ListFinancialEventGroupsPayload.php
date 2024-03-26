<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ListFinancialEventGroupsPayload extends BaseDto
{
    protected static array $attributeMap = [
        'nextToken' => 'NextToken',
        'financialEventGroupList' => 'FinancialEventGroupList',
    ];

    protected static array $complexArrayTypes = ['financialEventGroupList' => [FinancialEventGroup::class]];

    /**
     * @param  ?string  $nextToken  When present and not empty, pass this string token in the next request to return the next response page.
     * @param  FinancialEventGroup[]|null  $financialEventGroupList  A list of financial event group information.
     */
    public function __construct(
        public readonly ?string $nextToken = null,
        public readonly ?array $financialEventGroupList = null,
    ) {
    }
}
