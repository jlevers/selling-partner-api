<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GenerateOrderScenarioRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['orders' => [OrderScenarioRequest::class]];

    /**
     * @param  OrderScenarioRequest[]  $orders  The list of test orders requested as indicated by party identifiers.
     */
    public function __construct(
        public readonly ?array $orders = null,
    ) {
    }
}
