<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Scenario extends BaseDto
{
    protected static array $complexArrayTypes = ['orders' => [OrderScenarioRequest::class]];

    /**
     * @param  string  $scenarioId  An identifier that identifies the type of scenario that user can use for testing.
     * @param  OrderScenarioRequest[]  $orders  The list of test orders requested as indicated by party identifiers.
     */
    public function __construct(
        public readonly string $scenarioId,
        public readonly ?array $orders = null,
    ) {
    }
}
